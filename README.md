# Direct-Stripe
Stripe payment button for WordPress

=== Direct Stripe ===

Contributors: Nicolas Figueira

Donate link: https://newo.me/direct-stripe-payment-button-for-wordpress/

Tags: payment button, stripe button , stripe, custom stripe button, stripe modal form, stripe checkout, direct checkout, easy payments, receive payments, accept credit cards, accept payments

Requires at least: 4.2

Tested up to: 4.7

Stable tag: 1.1.5

License: GPLv2 or later 

License URI: http://www.gnu.org/licenses/gpl-2.0.html


Stripe payment buttons for WordPress, Stripe modal form, custom styles, automated emails

Stripe buttons. High conversion checkout without leaving your site! Payments, donations, subscriptions! Styling, T&C and automated emails options!


== Description ==
**Payments, donations and subscriptions!**

**High conversion Stripe checkout buttons, easily start charging without leaving your website.**

Add Stripe buttons to your website with a simple shortcode.

Customize the button looks.

Terms and conditions checkbox option.

Setup automated emails sent after a successful or error action on modal form submission.

**Set up landing pages after payments or errors.**

**Logs users and transactions in WordPress admin.**

**Option to ask for the billing details**

Ready for translations (Français déjà traduit) 

###Display the Stripe button on your site with a simple shortcode [direct-stripe] and set your options :

    - type : payment / subscription /donation
    - name : Name displayed in Stripe modal form (shop name). Set by fefault to the sitename
    - description : Product description displayed on modal form. Set by default to the site description.description
    - amount : Amount to charge if payment type (Stripe format : 100 is 1,00) or plan-id for subscription type, not required for donations
    - label : Text displayed on button to display modal form
    - panellabel : Text for modal form button
  	- coupon : coupon id set in stripe admin (only for subscriptions)

###Three shortcode exemples to simply add to pages / posts content or template

    -> Payment button for the amount of 50,00 (the currency set up in global settings) :
        - [direct-stripe type="payment" amount="5000" name="My Shop" description="The great product you dream of" label="Proceed to checkout" panellabel="Pay now"]

    -> Subscription button for the plan monthly-plan (created in stripe admin) with coupon first-month-50 (created in Stripe admin) :
        - [direct-stripe type="subscription" amount="monthly-plan" coupon="first-month-50" description="The great monthly plan" label="Subscribe" panellabel="That's it"]

    -> Donation button :
        - [direct-stripe type="donation" name="My plugin" description="Help me improve the plugin" label="Buy me coffee" panellabel="This will add one more setting option!"]


###Global Setup

  Log in to your stripe's account or create one at https://dashboard.stripe.com/register

=>Configure settings in admin panel :

**-> Direct Stripe -> Settings**


**->General settings :**

    - Enter your Stripe API keys ( find them at https://dashboard.stripe.com/account/apikeys )
    - Option for test mode / keys
    - Set your stripe's account currency 
    - Choose a success and error pages
    - Choose a log for your Stripes modal forms
	

**-> Styles Settings :**

    - Choose to use custom buton
    - Set custom button main colors
    - Set custom button borders radius
    - Choose to use a T&C checkbox 
    - Set texts and link to T&C pages


**-> Emails Settings :**
   
	  - Choose to use automated emails for successful payments to admin
    - Set Email subject and content
    - Choose to use automated emails for successful payments to Stripe's user
    - Set Email subject and content
    - Choose to use automated emails for unsuccessful payments to admin
    - Set Email subject and content
    - Choose to use automated emails for unsuccessful payments to Stripe's user



== Installation ==

1.0 Upload the plugin files to the /wp-content/plugins/direct-stripe directory, or install the plugin through the WordPress plugins screen directly. 

1.1 Activate the plugin through the 'Plugins' screen in WordPress

Log in to your stripe's account or create one at https://dashboard.stripe.com/register

=>Configure settings in admin panel :



== Changelog == 
1.1.4 Bypassed Chrome on iOS bug ( customized button would'nt open modal form ), disabled custom styles for that particular case ( Still need a real fix)

1.1.3 IMPORTANT Bug Fix for success / error landing/redirection pages

1.1.1 Bug Fix for existing users that don't have a Stripe ID and rewrote validation

1.1.0 Add a checkbox option to allow billing details collection before payment

1.0.1 Important fixes for subscriptions not using coupons

1.0 Released functionnal button for payment/donation and subscriptions. 
Logs users and transactions in WordPress admin. 
Set custom styles and automaed emails.

