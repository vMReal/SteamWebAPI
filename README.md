SteamWebAPI
===========

PHP module with Valve Web Steam Api. Dota2, user info, steam info and other.  (Plugins for Symfony, Yii and others). 



 Installation
 ------------

 Add the following to `require` section of your `composer.json`:

 ```
"vMReal/SteamWebAPI": "master"

 ```
 
 And probably will require add the following to `repositories`:
 
  ```
{
   "type":"git",
   "url":"http://github.com/vMReal/SteamWebAPI"
}

 ```
 

 Then do `composer install`.

 Usage
 -----

 ```php
 use vMReal\steamWebApi\SteamWebAPI;
 
 $api = new SteamWebAPI(['devKey'=> 'key xxxxx']);
 
 $api->getDota2Match()->getMatchHistory()->byAccountId(67679224)->inJSON();
 
 $api->getDota2Match()->getMatchDetails()->byMatchId(496934798)->inXML();
 
 ```
