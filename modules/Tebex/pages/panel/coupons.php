<?php
/*
 *	Made by Samerton
 *  https://github.com/samerton
 *  NamelessMC version 2.0.0-pr6
 *
 *  License: MIT
 *
 *  Tebex integration for NamelessMC - coupons
 */

// Can the user view the AdminCP?
if($user->isLoggedIn()){
	if(!$user->canViewStaffCP()){
		// No
		Redirect::to(URL::build('/'));
		die();
	} else {
		// Check the user has re-authenticated
		if(!$user->isAdmLoggedIn()){
			// They haven't, do so now
			Redirect::to(URL::build('/panel/auth'));
			die();
		} else {
			if(!$user->hasPermission('admincp.buycraft.coupons')){
				Redirect::to(URL::build('/panel'));
				die();
			}
		}
	}
} else {
	// Not logged in
	Redirect::to(URL::build('/login'));
	die();
}

define('PAGE', 'panel');
define('PARENT_PAGE', 'buycraft');
define('PANEL_PAGE', 'buycraft_coupons');
$page_title = $buycraft_language->get('language', 'coupons');
require_once(ROOT_PATH . '/core/templates/backend_init.php');
require_once(ROOT_PATH . '/modules/Tebex/classes/Buycraft.php');

if(isset($_GET['action'])){
	if($_GET['action'] == 'new'){
		if(!$user->hasPermission('admincp.buycraft.coupons.new')){
			Redirect::to(URL::build('/panel/tebex/coupons'));
			die();
		}

		// New coupon
		if(Input::exists()){
			$errors = array();

			if(Token::check(Input::get('token'))){
				$validate = new Validate();
				$validation = $validate->check($_POST, array(
					'code' => array(
						'required' => true,
						'alphanumeric' => true
					),
					'note' => array(
						'required' => true,
					)
				));

				if($validation->passed()){
					if(isset($_POST['expire_date']) && !empty($_POST['expire_date'])){
						if(Util::validateDate($_POST['expire_date'], 'Y-m-d')){
							$expire_date = $_POST['expire_date'];
						} else {
							$errors[] = $buycraft_language->get('language', 'invalid_expire_date');
						}
					} else {
						$expire_date = '-0001-11-30';
					}

					if(isset($_POST['start_date']) && !empty($_POST['start_date'])){
						if(Util::validateDate($_POST['start_date'], 'Y-m-d')){
							$start_date = $_POST['start_date'];
						} else {
							$errors[] = $buycraft_language->get('language', 'invalid_start_date');
						}
					} else {
						$start_date = date('Y-m-d');
					}

					if(!count($errors)){
						// Create coupon
						$post_object = new stdClass();

						if(isset($_POST['basket_type'])){
							switch($_POST['basket_type']){
								case 2:
									$post_object->basket_type = 'single';

									break;

								case 3:
									$post_object->basket_type = 'subscription';

									break;

								default:
									$post_object->basket_type = 'both';

									break;
							}
						} else {
							$post_object->basket_type = 'both';
						}

						if(isset($_POST['minimum'])){
							$post_object->minimum = $_POST['minimum'] + 0;
						} else {
							$post_object->minimum = 0;
						}

						if(isset($_POST['discount_application_method'])){
							switch($_POST['discount_application_method']){
								case 2:
									$post_object->discount_application_method = 1;

									break;

								case 3:
									$post_object->discount_application_method = 2;

									break;

								default:
									$post_object->discount_application_method = 0;

									break;
							}
						} else {
							$post_object->discount_application_method = 0;
						}

						if(isset($_POST['username']) && !empty($_POST['username'])){
							$post_object->username = Output::getClean($_POST['username']);
						}

						if(isset($_POST['effective_on'])){
							switch($_POST['effective_on']){
								case 2:
									$post_object->effective_on = 'package';

									break;

								case 3:
									$post_object->effective_on = 'category';

									break;

								default:
									$post_object->effective_on = 'cart';

									break;
							}
						} else
							$post_object->effective_on = 'cart';

						if(isset($_POST['packages']) && is_array($_POST['packages'])){
							$packages = array();
							foreach($_POST['packages'] as $package){
								$packages[] = $package + 0;
							}
							$post_object->packages = $packages;
						} else {
							$post_object->packages = array();
						}

						if(isset($_POST['categories']) && is_array($_POST['categories'])){
							$categories = array();
							foreach($_POST['categories'] as $category){
								$categories[] = $category + 0;
							}
							$post_object->categories = $categories;
						} else {
							$post_object->categories = array();
						}

						if(isset($_POST['discount_type'])){
							if($_POST['discount_type'] == 'percentage'){
								$post_object->discount_type = 'percentage';
							} else {
								$post_object->discount_type = 'value';
							}
						} else {
							$post_object->discount_type = 'value';
						}

						if(isset($_POST['discount_amount'])){
							$post_object->discount_amount = $_POST['discount_amount'] + 0;
						} else {
							$post_object->discount_amount = 0;
						}

						if(isset($_POST['discount_percentage'])){
							$post_object->discount_percentage = $_POST['discount_percentage'] + 0;
						} else {
							$post_object->discount_percentage = 0;
						}

						if(isset($_POST['redeem_unlimited']) && $_POST['redeem_unlimited'] == 'on'){
							$post_object->redeem_unlimited = 'true';
						} else {
							$post_object->redeem_unlimited = 'false';
						}

						if(isset($_POST['expire_never']) && $_POST['expire_never'] == 'on'){
							$post_object->expire_never = 'true';
						} else {
							$post_object->expire_never = 'false';
						}

						if(isset($_POST['expire_limit'])){
							$post_object->expire_limit = $_POST['expire_limit'] + 0;
						} else {
							$post_object->expire_limit = 0;
						}

						$post_object->code = Output::getClean($_POST['code']);
						$post_object->note = Output::getPurified($_POST['note']);
						$post_object->expire_date = $expire_date;
						$post_object->start_date = $start_date;

						$json = json_encode($post_object);

						// POST to Buycraft
						// Get server key
						$server_key = $queries->getWhere('buycraft_settings', array('name', '=', 'server_key'));

						if(count($server_key))
							$server_key = $server_key[0]->value;
						else
							$server_key = null;

						$ch = curl_init();
						curl_setopt($ch, CURLOPT_URL, 'https://plugin.buycraft.net/coupons');
						curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json', 'X-Buycraft-Secret: ' . $server_key));
						curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
						curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
						curl_setopt($ch, CURLOPT_POSTFIELDS, $json);

						$ch_result = curl_exec($ch);

						$result = json_decode($ch_result);

						curl_close($ch);

						if(isset($result->error_code)){
							$errors[] = Output::getClean($result->error_code . ': ' . $result->error_message);
						} else {
							Buycraft::updateCoupons($server_key, null, DB::getInstance());
							Session::flash('new_coupon_success', $buycraft_language->get('language', 'coupon_created_successfully'));
							Redirect::to(URL::build('/panel/tebex/coupons'));
							die();
						}

					}

				} else {
					foreach($validation->errors() as $error){
						if(strpos($error, 'alphanumeric') !== false){
							$errors[] = $buycraft_language->get('language', 'coupon_code_alphanumeric');
						} else {
							// required
							if(strpos($error, 'code') !== false){
								$errors[] = $buycraft_language->get('language', 'coupon_code_required');
							} else {
								$errors[] = $buycraft_language->get('language', 'coupon_note_required');
							}
						}
					}
				}

			} else
				$errors[] = $language->get('general', 'invalid_token');
		}

	}
}

// Load modules + template
Module::loadPage($user, $pages, $cache, $smarty, array($navigation, $cc_nav, $mod_nav), $widgets);

if(Session::exists('new_coupon_success')){
	$success = Session::flash('new_coupon_success');
}

if(isset($_GET['action'])){
	if($_GET['action'] == 'new'){
		// Get variables
		$packages = $queries->orderAll('buycraft_packages', '`order`', 'ASC');
		$categories= $queries->orderAll('buycraft_categories', '`order`', 'ASC');
		$currency = $queries->getWhere('buycraft_settings', array('name', '=', 'currency_symbol'));
		if(count($currency))
			$currency = Output::getPurified($currency[0]->value);
		else
			$currency = '';

		$smarty->assign(array(
			'COUPON_CODE' => $buycraft_language->get('language', 'coupon_code'),
			'COUPON_CODE_VALUE' => Output::getClean(Input::get('code')),
			'COUPON_NOTE' => $buycraft_language->get('language', 'coupon_note'),
			'COUPON_NOTE_VALUE' => Output::getClean(Input::get('note')),
			'EFFECTIVE_ON' => $buycraft_language->get('language', 'effective_on'),
			'EFFECTIVE_ON_VALUE' => Output::getClean(Input::get('effective_on')),
			'CART' => $buycraft_language->get('language', 'cart'),
			'PACKAGE' => $buycraft_language->get('language', 'package'),
			'CATEGORY' => $buycraft_language->get('language', 'category'),
			'PACKAGES' => $buycraft_language->get('language', 'packages'),
			'CATEGORIES' => $buycraft_language->get('language', 'categories'),
			'AVAILABLE_PACKAGES' => $packages,
			'AVAILABLE_CATEGORIES' => $categories,
			'DISCOUNT_TYPE' => $buycraft_language->get('language', 'discount_type'),
			'DISCOUNT_TYPE_VALUE' => $buycraft_language->get('language', 'value'),
			'DISCOUNT_TYPE_PERCENTAGE' => $buycraft_language->get('language', 'percentage'),
			'DISCOUNT_TYPE_VALUE_VALUE' => Output::getClean(Input::get('discount_amount')),
			'DISCOUNT_TYPE_PERCENTAGE_VALUE' => Output::getClean(Input::get('discount_percentage')),
			'UNLIMITED_USAGE' => $buycraft_language->get('language', 'unlimited_usage'),
			'UNLIMITED_USAGE_VALUE' => (isset($_POST['redeem_unlimited']) && $_POST['redeem_unlimited'] == 'on'),
			'USES' => $buycraft_language->get('language', 'uses'),
			'USES_VALUE' => Output::getClean(Input::get('expire_limit')),
			'NEVER_EXPIRE' => $buycraft_language->get('language', 'never_expire'),
			'NEVER_EXPIRE_VALUE' => (isset($_POST['expire_never']) && $_POST['expire_never'] == 'on'),
			'EXPIRY_DATE' => $buycraft_language->get('language', 'expiry_date'),
			'EXPIRY_DATE_VALUE' => Output::getClean(Input::get('expire_date')),
			'START_DATE' => $buycraft_language->get('language', 'start_date'),
			'START_DATE_VALUE' => (isset($_POST['start_date']) ? Output::getClean($_POST['start_date']) : date('Y-m-d')),
			'BASKET_TYPE' => $buycraft_language->get('language', 'basket_type'),
			'ALL_PURCHASES' => $buycraft_language->get('language', 'all_purchases'),
			'ONE_OFF_PURCHASES' => $buycraft_language->get('language', 'one_off_purchases'),
			'SUBSCRIPTIONS' => $buycraft_language->get('language', 'subscriptions'),
			'BASKET_TYPE_VALUE' => Output::getClean(Input::get('basket_type')),
			'DISCOUNT_APPLICATION_TYPE' => $buycraft_language->get('language', 'discount_application_type'),
			'EACH_PACKAGE' => $buycraft_language->get('language', 'each_package'),
			'BASKET_BEFORE_SALES' => $buycraft_language->get('language', 'basket_before_sales'),
			'BASKET_AFTER_SALES' => $buycraft_language->get('language', 'basket_after_sales'),
			'DISCOUNT_APPLICATION_TYPE_VALUE' => Output::getClean(Input::get('discount_application_method')),
			'MINIMUM_SPEND' => $buycraft_language->get('language', 'minimum_spend'),
			'MINIMUM_SPEND_VALUE' => Output::getClean(Input::get('minimum')),
			'USER_COUPON_FOR' => $buycraft_language->get('language', 'user_coupon_for'),
			'USER_COUPON_FOR_VALUE' => Output::getClean(Input::get('username')),
			'CURRENCY' => $currency,
			'CANCEL' => $language->get('general', 'cancel'),
			'CONFIRM_CANCEL' => $language->get('general', 'confirm_cancel'),
			'CANCEL_LINK' => URL::build('/panel/tebex/coupons'),
			'ARE_YOU_SURE' => $language->get('general', 'are_you_sure'),
			'YES' => $language->get('general', 'yes'),
			'NO' => $language->get('general', 'no'),
			'CREATING_COUPON' => $buycraft_language->get('language', 'creating_coupon'),
			'SELECT_MULTIPLE_WITH_CTRL' => $buycraft_language->get('language', 'select_multiple_with_ctrl'),
			'OPTIONAL' => $buycraft_language->get('language', 'optional')
		));

		$template->addCSSFiles(array(
			(defined('CONFIG_PATH') ? CONFIG_PATH : '') . '/core/assets/plugins/switchery/switchery.min.css' => array()
		));

		$template->addJSFiles(array(
			(defined('CONFIG_PATH') ? CONFIG_PATH : '') . '/core/assets/plugins/switchery/switchery.min.js' => array()
		));

		$template->addJSScript('
			var elems = Array.prototype.slice.call(document.querySelectorAll(\'.js-switch\'));
	
			elems.forEach(function(html) {
			  var switchery = new Switchery(html, {color: \'#23923d\', secondaryColor: \'#e56464\'});
			});

			$(document).ready(function(){
                $(\'#effectiveOnPackages\').hide();
                $(\'#effectiveOnCategories\').hide();
                $(\'#discountTypePercentage\').hide();
			});

			$(\'#inputEffectiveOn\').change(function(){
				let selected = $(this).val();
				if(selected == \'1\'){
					$(\'#effectiveOnPackages\').hide();
					$(\'#effectiveOnCategories\').hide();
				} else if(selected == \'2\'){
					$(\'#effectiveOnPackages\').show();
					$(\'#effectiveOnCategories\').hide();
				} else if(selected == \'3\'){
					$(\'#effectiveOnPackages\').hide();
					$(\'#effectiveOnCategories\').show();
				}
			});

			$(\'#inputDiscountType\').change(function(){
			    let selected = $(this).val();
			    if(selected == \'value\'){
			        $(\'#discountTypeValue\').show();
			        $(\'#discountTypePercentage\').hide();
				} else {
			        $(\'#discountTypeValue\').hide();
			        $(\'#discountTypePercentage\').show();
				}
			});

			$(\'#inputRedeemUnlimited\').change(function(){
			    if($(\'#inputRedeemUnlimited\').prop("checked")){
			        $(\'#redeemLimit\').hide();
				} else {
			        $(\'#redeemLimit\').show();
				}
			});

            $(\'#inputExpireNever\').change(function(){
                if($(\'#inputExpireNever\').prop("checked")){
                    $(\'#expireDate\').hide();
                } else {
                    $(\'#expireDate\').show();
                }
            });
		');

		$template_file = 'tebex/coupons_new.tpl';

	} else if($_GET['action'] == 'view'){
		// Get coupon
		if(!isset($_GET['id']) || !is_numeric($_GET['id'])){
			Redirect::to(URL::build('/panel/tebex/coupons'));
			die();
		}

		$coupon = $queries->getWhere('buycraft_coupons', array('id', '=', $_GET['id']));
		if(!count($coupon)){
			Redirect::to(URL::build('/panel/tebex/coupons'));
			die();
		} else
			$coupon = $coupon[0];

		if(Input::exists() && isset($_POST['action']) && $_POST['action'] == 'delete' && $user->hasPermission('admincp.buycraft.coupons.delete')) {
			if(isset($_GET['id']) && is_numeric($_GET['id'])) {
				if(!Token::check(Input::get('token'))) {
					$errors = array($language->get('general', 'invalid_token'));
				} else {
					try {
						// DELETE request
						// Get server key
						$server_key = $queries->getWhere('buycraft_settings', array('name', '=', 'server_key'));

						if(count($server_key))
							$server_key = $server_key[0]->value;
						else
							$server_key = null;

						$ch = curl_init();
						curl_setopt($ch, CURLOPT_URL, 'https://plugin.buycraft.net/coupons/' . $coupon->id);
						curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json', 'X-Buycraft-Secret: ' . $server_key));
						curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
						curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
						curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "DELETE");

						$ch_result = curl_exec($ch);

						$result = json_decode($ch_result);

						curl_close($ch);

						if(isset($result->error_code)){
							$errors = array(Output::getClean($result->error_code . ': ' . $result->error_message));
						} else {
							$queries->delete('buycraft_coupons', array('id', '=', $coupon->id));
							Session::flash('new_coupon_success', $buycraft_language->get('language', 'coupon_deleted_successfully'));
							Redirect::to(URL::build('/panel/tebex/coupons'));
							die();
						}
					} catch(Exception $e){
						$errors = array($e->getMessage());
					}
				}
			}
		}

		// Currency
		$currency = $queries->getWhere('buycraft_settings', array('name', '=', 'currency_symbol'));
		if(!count($currency))
			$currency = '';
		else
			$currency = Output::getPurified($currency[0]->value);

		// Get packages
		$packages = $queries->orderAll('buycraft_packages', '`order`', 'ASC');
		$effective_packages = json_decode($coupon->effective_packages, true);
		$template_packages = array();

		foreach($packages as $package){
			if(in_array($package->id, $effective_packages)){
				$template_packages[] = Output::getClean($package->name);
			}
		}

		// Get categories
		$categories = $queries->orderAll('buycraft_categories', '`order`', 'ASC');
		$effective_categories = json_decode($coupon->effective_categories, true);
		$template_categories = array();

		foreach($categories as $category){
			if(in_array($category->id, $effective_categories)){
				$template_categories[] = Output::getClean($category->name);
			}
		}

		// Basket type
		switch($coupon->basket_type){
			case 'single':
				$basket_type = $buycraft_language->get('language', 'one_off_purchases');
				break;

			case 'subscription':
				$basket_type = $buycraft_language->get('language', 'subscriptions');
				break;

			default:
				$basket_type = $buycraft_language->get('language', 'all_purchases');
				break;
		}

		$smarty->assign(array(
			'VIEWING_COUPON' => str_replace('{x}', Output::getClean($coupon->code), $buycraft_language->get('language', 'viewing_coupon_x')),
			'BACK' => $language->get('general', 'back'),
			'BACK_LINK' => URL::build('/panel/tebex/coupons'),
			'COUPON_ID' => Output::getClean($coupon->id),
			'COUPON_CODE' => $buycraft_language->get('language', 'coupon_code'),
			'COUPON_CODE_VALUE' => Output::getClean($coupon->code),
			'COUPON_NOTE' => $buycraft_language->get('language', 'coupon_note'),
			'COUPON_NOTE_VALUE' => Output::getClean($coupon->note),
			'EFFECTIVE_ON' => $buycraft_language->get('language', 'effective_on'),
			'EFFECTIVE_ON_VALUE' => $buycraft_language->get('language', $coupon->effective_type),
			'EFFECTIVE_ON_TYPE' => Output::getClean($coupon->effective_type),
			'PACKAGES' => $buycraft_language->get('language', 'packages'),
			'PACKAGES_VALUE' => $template_packages,
			'CATEGORIES' => $buycraft_language->get('language', 'categories'),
			'CATEGORIES_VALUE' => $template_categories,
			'DISCOUNT_TYPE' => $buycraft_language->get('language', 'discount_type'),
			'DISCOUNT_TYPE_VALUE' => $buycraft_language->get('language', $coupon->discount_type),
			'DISCOUNT_TYPE_RAW' => Output::getClean($coupon->discount_type),
			'VALUE' => $buycraft_language->get('language', 'value'),
			'PERCENTAGE' => $buycraft_language->get('language', 'percentage'),
			'CURRENCY' => $currency,
			'DISCOUNT_VALUE' => sprintf('%0.2f', $coupon->discount_value),
			'DISCOUNT_PERCENTAGE' => Output::getClean($coupon->discount_percentage),
			'START_DATE' => $buycraft_language->get('language', 'start_date'),
			'START_DATE_VALUE' => date('Y-m-d', $coupon->start_date),
			'END_DATE' => $buycraft_language->get('language', 'expiry_date'),
			'END_DATE_VALUE' => $coupon->expires ? date('Y-m-d', $coupon->date) : $buycraft_language->get('language', 'never'),
			'USES' => $buycraft_language->get('language', 'uses'),
			'UNLIMITED_VALUE' => $coupon->redeem_unlimited,
			'UNLIMITED_USAGE' => $buycraft_language->get('language', 'unlimited_usage'),
			'USES_COUNT' => Output::getClean($coupon->redeem_limit),
			'MINIMUM_SPEND' => $buycraft_language->get('language', 'minimum_spend'),
			'MINIMUM_SPEND_VALUE' => sprintf('%0.2f', $coupon->minimum),
			'USER_LIMIT' => $buycraft_language->get('language', 'user_limit'),
			'USER_LIMIT_VALUE' => Output::getClean($coupon->user_limit),
			'BASKET_TYPE' => $buycraft_language->get('language', 'basket_type'),
			'BASKET_TYPE_VALUE' => $basket_type,
			'USER_COUPON_FOR' => $buycraft_language->get('language', 'user_coupon_for'),
			'USER_COUPON_FOR_VALUE' => Output::getClean($coupon->username),
			'INFO' => $language->get('general', 'info'),
			'EDIT_IN_BUYCRAFT' => $buycraft_language->get('language', 'edit_coupon_in_buycraft')
		));

		if($user->hasPermission('admincp.buycraft.coupons.delete')){
			$smarty->assign(array(
				'DELETE_COUPON' => $buycraft_language->get('language', 'delete_coupon'),
				'CONFIRM_DELETE_COUPON' => $buycraft_language->get('language', 'confirm_delete_coupon'),
				'CANCEL' => $language->get('general', 'cancel'),
			));
		}

		$template_file = 'tebex/coupons_view.tpl';

	} else {
		Redirect::to(URL::build('/panel/tebex/coupons'));
		die();
	}

} else {
	// Get all coupons
	$coupons = $queries->getWhere('buycraft_coupons', array('id', '<>', 0));

	if($user->hasPermission('admincp.buycraft.coupons.new')){
		$smarty->assign(array(
			'NEW_COUPON' => $buycraft_language->get('language', 'new_coupon'),
			'NEW_COUPON_LINK' => URL::build('/panel/tebex/coupons/', 'action=new')
		));
	}

	$template_array = array();
	if(count($coupons)){
		foreach($coupons as $coupon){
			$template_array[] = array(
				'code' => Output::getClean($coupon->code),
				'expiry_unix' => Output::getClean($coupon->date),
				'expiry' => ($coupon->date ? date('d M Y, H:i', $coupon->date) : $buycraft_language->get('language', 'never')),
				'limit' => Output::getClean($coupon->redeem_limit),
				'link' => URL::build('/panel/tebex/coupons/', 'action=view&id=' . Output::getClean($coupon->id))
			);
		}

		if(!defined('TEMPLATE_BUYCRAFT_SUPPORT')){
			$template->addCSSFiles(array(
				(defined('CONFIG_PATH') ? CONFIG_PATH : '') . '/custom/panel_templates/Default/assets/css/dataTables.bootstrap4.min.css' => array()
			));

			$template->addJSFiles(array(
				(defined('CONFIG_PATH') ? CONFIG_PATH : '') . '/core/assets/plugins/dataTables/jquery.dataTables.min.js' => array(),
				(defined('CONFIG_PATH') ? CONFIG_PATH : '') . '/custom/panel_templates/Default/assets/js/dataTables.bootstrap4.min.js' => array()
			));

			$template->addJSScript('
				$(document).ready(function() {
					$(\'.dataTables-coupons\').dataTable({
						responsive: true,
						language: {
							"lengthMenu": "' . $language->get('table', 'display_records_per_page') . '",
							"zeroRecords": "' . $language->get('table', 'nothing_found') . '",
							"info": "' . $language->get('table', 'page_x_of_y') . '",
							"infoEmpty": "' . $language->get('table', 'no_records') . '",
							"infoFiltered": "' . $language->get('table', 'filtered') . '",
							"search": "' . $language->get('general', 'search') . '",
							"paginate": {
								"next": "' . $language->get('general', 'next') . '",
								"previous": "' . $language->get('general', 'previous') . '"
							}
						}
					});
				});
			');
		}

	} else
		$smarty->assign('NO_COUPONS', $buycraft_language->get('language', 'no_coupons'));

	$smarty->assign(array(
		'COUPON_CODE' => $buycraft_language->get('language', 'coupon_code'),
		'EXPIRY_DATE_TABLE' => $buycraft_language->get('language', 'expiry_date_table'),
		'USES' => $buycraft_language->get('language', 'uses'),
		'VIEW' => $buycraft_language->get('language', 'view'),
		'COUPON_LIST' => $template_array
	));

	$template_file = 'tebex/coupons.tpl';
}

if(isset($success))
	$smarty->assign(array(
		'SUCCESS' => $success,
		'SUCCESS_TITLE' => $language->get('general', 'success')
	));

if(isset($errors) && count($errors))
	$smarty->assign(array(
		'ERRORS' => $errors,
		'ERRORS_TITLE' => $language->get('general', 'error')
	));

$smarty->assign(array(
	'PARENT_PAGE' => PARENT_PAGE,
	'DASHBOARD' => $language->get('admin', 'dashboard'),
	'BUYCRAFT' => $buycraft_language->get('language', 'buycraft'),
	'PAGE' => PANEL_PAGE,
	'TOKEN' => Token::get(),
	'SUBMIT' => $language->get('general', 'submit'),
	'COUPONS' => $buycraft_language->get('language', 'coupons')
));

$page_load = microtime(true) - $start;
define('PAGE_LOAD_TIME', str_replace('{x}', round($page_load, 3), $language->get('general', 'page_loaded_in')));

$template->onPageLoad();

require(ROOT_PATH . '/core/templates/panel_navbar.php');

// Display template
$template->displayTemplate($template_file, $smarty);