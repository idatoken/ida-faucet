# ida-faucet
**Free Faucet Script** [Faucet Script Demo](https://idatoken.org/faucet/)


1) Upload files to your hosting
2) Go to your website url, it should redirect to the install.php page
3) Follow the steps, enter all informations
4) Upload your new settings, add eventually some banners or popunder codes.
5) Remove install.php and it's done.

-----------------------
*Features :*
- 7 Differents Colors Themes
- Google recaptcha
- Shortener or direct claim
- Referral system
- Limit claims per day & set delay between 2 claims
- Payment to direct wallet or delayed in a balance (with ida-api)
- Stats for last 30 days
- Ban/Unban IP
- VPN/Proxy Protection (iphub)
- ...
-----------------------

>Requierements :

PHP 5.6+, MySQL,PHP sessions,fopen(optional)



>Is the script is free? There is no limitation?

Yes it's free and there is no limitation from this script. There is only the limitations from the : IDATOKEN API  (https://idatoken.org/api.php)



>Where can I add my ADS codes?

add your banners code into $header_banners,$footer_banners on the settings.php file.



>Can I add popups?

you can add your script codes into $popunders on the settings.php file.



>Can I add shorteners?

still in settings.php file, add them like this way :
```
$shorteners[]=''; //(this mean = no shortener on first claim)
$shorteners[]='https://shortit.pw/api.php?api=ReplaceThis&url='; // 2nd claim, we set a shortener
$shorteners[]='';  // we can decide to not add any shortener on 3th claim
$shorteners[]='https://shortit.pw/api.php?api=ReplaceThis&url=';  // you can replace it with any compatible shortener
```
you are supposed to add the equal lines of shorteners than your $ida_maxclaims (max claims per day) you set.



>All settings are in the file "settings.php".



>There is an admin area (link in the footer of your installed faucet)

You could change the theme colors, ban or unban ip, and be aware about new version of this script.



>Can I remove the links in footer?

No.



>I have an awesome idea to improve this script !! Really amazinnnng ideaaaa !!!!!

Really? Tell more about it on our github or in our telegram/discord and we will think about adding it.



>I don't know what's happen, something don't work, plzzzz helpppp !!!

There is no support as it's a free script but you can still ask help on github, telegram or discord, we will try to help as the community could help you too.
