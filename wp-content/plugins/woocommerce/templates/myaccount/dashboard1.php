<?php
/**
 * My Account Dashboard
 *
 * Shows the first intro screen on the account dashboard.
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/myaccount/dashboard.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see         https://docs.woocommerce.com/document/template-structure/
 * @author      WooThemes
 * @package     WooCommerce/Templates
 * @version     2.6.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}
?>
<script type="text/javascript">
	function view_ipartner_commission(url,type) {
		if ( type == "popup" ) {
			window.open(url,'popUpWindow','height=400,width=400,left=100,top=100,resizable=yes,scrollbars=yes,toolbar=no,menubar=no,location=no,status=no');
		} else {
			window.open(url);
		}
	}
</script>

<?php
	/**
	 * My Account dashboard.
	 *
	 * @since 2.6.0
	 */
	do_action( 'woocommerce_account_dashboard' );
	echo '<table><tr><td>' . sprintf( esc_attr__( 'You can view your %1$srecent orders%2$s, manage your %3$sbilling and shipping address%2$s and %4$sedit your password and account details%2$s from the dashboard.', 'woocommerce' ), '<a href="' . esc_url( wc_get_endpoint_url( 'orders' ) ) . '">', '</a>', '<a href="' . esc_url( wc_get_endpoint_url( 'edit-address' ) ) . '">', '<a href="' . esc_url( wc_get_endpoint_url( 'edit-account' ) ) . '">' ) . '</td></tr></table>';

	/**
	 * Deprecated woocommerce_before_my_account action.
	 *
	 * @deprecated 2.6.0
	 */
	do_action( 'woocommerce_before_my_account' );
	$ipartner = false;
	foreach( wp_get_current_user()->roles as $role ) {
		if ( $role == 'ipartner' || $role == 'administrator' ) {
			$ipartner = true;
		}
	}
	if ( $ipartner ) {
		global $wpdb;
		$user = wp_get_current_user();
		$code = get_user_meta( $user->ID, 'iPartner_Code', true );
		$sponsor = $wpdb->get_var("SELECT Ref_iPartner_Code FROM ct_ipartner WHERE iPartner_Code = '" . $code . "'");

		echo '</br><h3 style="font-size: 20px;">Your iPartner Code is '.'<span class="word_color">'.$code.'</span> and your Referral is '.'<span class="word_color">'.$sponsor.'</span></h3>';

		echo '<h2>iPartner Code</h2>';
		echo '<table width="100%"><tr><td>' . do_shortcode('[wpdatatable id=53 var1=' . wp_get_current_user()->user_email . ']') . '</td></tr></table>';

		//echo '<h2>iPartner Link</h2>';
		//echo '<table><tr><td><a href="https://arissto.com/my/ipartner-application-link/?ref=' . wp_get_current_user()->user_login . '" target="_blank"><img src="http://arissto.com/my/wp-content/uploads/ipartner-application-button.png"/></a></td></tr></table>';

		echo '<h2>iPartner 2.0 Link</h2>';
		echo '<table><tr><td><a href="https://arissto.com/my/ipartner-application-link-2-0/?ref=' . wp_get_current_user()->user_login . '" target="_blank"><img src="http://arissto.com/my/wp-content/uploads/ipartner-application-button-2.0.jpg"/></a></td></tr></table>';

		echo '<h2>iPartner Commission Statement</h2>';
		echo '<table width="100%"><tr><td>' . do_shortcode('[wpdatatable id=19 var1=' . wp_get_current_user()->user_email . ']') . '</td></tr></table>';

		//echo '<h3>iPartner Commission Statement ( Adjustment )</h3>';
		//echo '<table width="100%"><tr><td>' . do_shortcode('[wpdatatable id=44 var1=' . wp_get_current_user()->user_email . ']') . '</td></tr></table>';
		
		echo '<h2>iPartner Listing</h2>';
		echo '<table width="100%"><tr><td>' . do_shortcode('[wpdatatable id=33 var1=' . wp_get_current_user()->user_email . ']') . '</td></tr></table>';

	}
	
	/*global $wpdb;
	$user = wp_get_current_user();
	$partner_code = get_user_meta( $user->ID, 'Partner_Code', true );
	if ( isset( $partner_code ) && trim( $partner_code ) != "" ) {
		$result = $wpdb->get_results( "SELECT * FROM `ct_coffee_sharing_order` where `Sales_Partner_Code` = '" . $partner_code . "'" );
		if ( !empty( $result ) ) {
			echo '<h2>RM1 Coffee Machine Plan Online Orders</h2>';
			echo '<table width="100%"><tr><td>' . do_shortcode('[wpdatatable id=20 var1=' . $partner_code . ' var2=0]') . '</td></tr></table>';
		}
	}
	$membership_no = get_user_meta( $user->ID, 'Membership_No', true );
	if ( isset( $membership_no ) && trim( $membership_no ) != "" ) {
		$result = $wpdb->get_results( "SELECT * FROM `ct_coffee_sharing_subscription` where `Membership_No` = '" . $membership_no . "'" );
		if ( !empty( $result ) ) {
			echo '<h2>My Subscriptions</h2>';
			echo '<table width="100%"><tr><td>' . do_shortcode('[wpdatatable id=21 var1=' . $membership_no . ' var2=0]') . '</td></tr></table>';
		}
		$result = $wpdb->get_results( "SELECT * FROM `ct_coffee_sharing_subscription` where `Subscription_No` = '" . $membership_no . "'" );
		if ( !empty( $result ) ) {
			echo '<h2>My Subscription Payments</h2>';
			echo '<table width="100%"><tr><td>' . do_shortcode('[wpdatatable id=34 var1=' . $membership_no . ' var2=0]') . '</td></tr></table>';
		}
	}*/

	/**
	 * Deprecated woocommerce_after_my_account action.
	 *
	 * @deprecated 2.6.0
	 */
	do_action( 'woocommerce_after_my_account' );
?>
