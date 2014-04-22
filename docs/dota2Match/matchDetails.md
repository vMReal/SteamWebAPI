# MatchDetails

Information about a particular match.

## Examples

```
 use vMReal\steamWebApi\SteamWebApi;
  
 $api = new SteamWebApi(['devKey'=> 'key xxxxx'])
     ->getDota2Match()
     ->getMatchDetails();


 $api->byMatchId(67679224)->inJson();

```

We get more information on match that correspond to "match id", in format json.


## Search criteria

`->byMatchId()` (string)
    Match id 
    
    
## Result data

    players
        List of players in the match.

        account_id
            32-bit account ID 
            
        player_slot
            See #Player Slot below. 
            
        hero_id
            The hero's unique ID. A list of hero IDs can be found via the GetHeroes method. 
            
        item_0
            ID of the top-left inventory item.
            
        item_1
            ID of the top-center inventory item.
            
        item_2
            ID of the top-right inventory item.
            
        item_3
            ID of the bottom-left inventory item.
            
        item_4
            ID of the bottom-center inventory item.
            
        item_5
            ID of the bottom-right inventory item.
            
        kills
            The amount of kills attributed to this player.
            
        deaths
            The amount of times this player died during the match.
            
        assists
            The amount of assists attributed to this player.
            
        leaver_status
            What the values here represent are not yet known.
            
        gold
            The amount of gold the player had remaining at the end of the match.
            
        last_hits
            The amount of last-hits the player got during the match.
            
        denies
            The amount of denies the player got during the match.
            
        gold_per_min
            The player's overall gold/minute.
            
        xp_per_min
            The player's overall experience/minute.
            
        gold_spent
            The amount of gold the player spent during the match.
            
        hero_damage
            The amount of damage the player dealt to heroes. 
            
        tower_damage
            The amount of damage the player dealt to towers. 
            
        hero_healing
            The amount of health the player had healed on heroes. 
            
        level
            The player's level at match end. 
            
        ability_upgrades
            A list detailing a player's ability upgrades.

            ability
                ID of the ability upgraded. 
                
            time
                Time since match start that the ability was upgraded.
                
            level
                The level of the player at time of upgrading. 

        additional_units
            Additional playable units owned by the player.

            unitname
                The name of the unit 
                
            item_0
                ID of the top-left inventory item. 
                
            item_1
                ID of the top-center inventory item. 
                
            item_2
                ID of the top-right inventory item. 
                
            item_3
                ID of the bottom-left inventory item. 
                
            item_4
                ID of the bottom-center inventory item. 
                
            item_5
                ID of the bottom-right inventory item. 

    season
        The season the game was played in. 
        
    radiant_win
        Dictates the winner of the match, true for radiant; false for dire. 
        
    duration
        The length of the match, in seconds since the match began. 
        
    start_time
        Unix timestamp of when the match began. 
        
    match_id
        The matches unique ID. 
        
    match_seq_num
        A 'sequence number', representing the order in which matches were recorded.
        
    tower_status_radiant
        See #Tower Status below. 
        
    tower_status_dire
        See #Tower Status below. 
        
    barracks_status_radiant
        See #Barracks Status below. 
        
    barracks_status_dire
        See #Barracks Status below. 
        
    cluster
        The server cluster the match was played upon. Used for downloading replays of matches.
        
    first_blood_time
        The time in seconds since the match began when first-blood occured. 
        
    lobby_type

        -1 - Invalid
        0 - Public matchmaking
        1 - Practise
        2 - Tournament
        3 - Tutorial
        4 - Co-op with bots.
        5 - Team match
        6 - Solo Queue

    human_players
        The amount of human players within the match. 
        
    leagueid
        The league that this match was a part of. A list of league IDs can be found via the GetLeagueListing method.
        
    positive_votes
        The number of thumbs-up the game has received by users. 
        
    negative_votes
        The number of thumbs-down the game has received by users. 
        
    game_mode
    0 - None
    1 - All Pick
    2 - Captain's Mode
    3 - Random Draft
    4 - Single Draft
    5 - All Random
    6 - Intro
    7 - Diretide
    8 - Reverse Captain's Mode
    9 - The Greeviling
    10 - Tutorial
    11 - Mid Only
    12 - Least Played
    13 - New Player Pool
    14 - Compendium Matchmaking
    
    picks_bans
        A list of the picks and bans in the match, if the game mode is Captains Mode.

        is_pick
            Whether this entry is a pick (true) or a ban (false). 
            
        hero_id
            The hero's unique ID. A list of hero IDs can be found via the GetHeroes method. 
            
        team
            The team who chose the pick or ban; 0 for Radiant, 1 for Dire. 
            
        order
            The order of which the picks and bans were selected; 0-19. 






##### Player Slot

A player's slot is returned via an 8-bit unsigned integer. The first bit represent the player's team, false if Radiant and true if dire. The final three bits represent the player's position in that team, from 0-4.

```
   ┌─────────────── Team (false if Radiant, true if Dire).
   │ ┌─┬─┬─┬─────── Not used.
   │ │ │ │ │ ┌─┬─┬─ The position of a player within their team (0-4).
   │ │ │ │ │ │ │ │
   0 0 0 0 0 0 0 0
```   

##### Tower Status

A particular teams tower status is given as a 16-bit unsigned integer. The rightmost 11 bits represent individual towers belonging to that team; see below for a visual representation.

```
   ┌─┬─┬─┬─┬─────────────────────── Not used.
   │ │ │ │ │ ┌───────────────────── Ancient Top
   │ │ │ │ │ │ ┌─────────────────── Ancient Bottom
   │ │ │ │ │ │ │ ┌───────────────── Bottom Tier 3
   │ │ │ │ │ │ │ │ ┌─────────────── Bottom Tier 2
   │ │ │ │ │ │ │ │ │ ┌───────────── Bottom Tier 1
   │ │ │ │ │ │ │ │ │ │ ┌─────────── Middle Tier 3
   │ │ │ │ │ │ │ │ │ │ │ ┌───────── Middle Tier 2
   │ │ │ │ │ │ │ │ │ │ │ │ ┌─────── Middle Tier 1
   │ │ │ │ │ │ │ │ │ │ │ │ │ ┌───── Top Tier 3
   │ │ │ │ │ │ │ │ │ │ │ │ │ │ ┌─── Top Tier 2
   │ │ │ │ │ │ │ │ │ │ │ │ │ │ │ ┌─ Top Tier 1
   │ │ │ │ │ │ │ │ │ │ │ │ │ │ │ │
   0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0
```

##### Barracks Status

A particular teams tower status is given as an 8-bit unsigned integer. The rightmost 6 bits represent the barracks belonging to that team; see below for a visual representation.

```
   ┌─┬───────────── Not used.
   │ │ ┌─────────── Bottom Ranged
   │ │ │ ┌───────── Bottom Melee
   │ │ │ │ ┌─────── Middle Ranged
   │ │ │ │ │ ┌───── Middle Melee
   │ │ │ │ │ │ ┌─── Top Ranged
   │ │ │ │ │ │ │ ┌─ Top Melee
   │ │ │ │ │ │ │ │
   0 0 0 0 0 0 0 0
```
