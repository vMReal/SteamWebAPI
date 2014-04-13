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
 use vMReal\steamWebApi\SteamWebApi;
 
 $api = new SteamWebApi(['devKey'=> 'key xxxxx']);
 
 $api->getDota2Match()->getMatchHistory()->byAccountId(67679224)->inJson();
 
 $api->getDota2Match()->getMatchDetails()->byMatchId(496934798)->inXml();
 
 ```
 
DOCUMENTATION
-------------

To start using the api, you need to get a *developer key*. You can get it by this link: [get-steam-div-key](http://steamcommunity.com/dev/apikey).


In the configuration file you specify some settings as an associative array.

+ dev-key => 'XXXXXXXX'
+ language => 'en_us' (optional) The ISO639-1 language code.



###### Example of creating an instance of api:

```
use vMReal\steamWebApi\SteamWebApi;
 
$config = [
   'devKey'=> 'xxxxxxx'
];
 
$api = new SteamWebApi($config);

```

Next call chain, first you select a category, such as `getDota2Match()`. 

The next step, you must choose your desired method, for example: `getMatchHistory()`.

The next step will be the appointment of search criteria, for example: `byAccountId(xxxxxx)`, `byHeroId(xxxxxx)`

The final step, we choose in which format we want to get the answer.  Always available 3 methods:
+ `inJson()`
+ `inArray()`
+ `inXml()`

###### Example:

```
$response = $api->getDota2Match()->getMatchHistory()
   ->byAccountId(474747)
   ->byHeroId(55)
   ->inJson();

```

In return you will receive json object that contains a list of matches filtered by id Account and hero.



### List of available categories and methods.
