## Examples

```
 use vMReal\steamWebApi\SteamWebApi;
  
 $api = new SteamWebApi(['devKey'=> 'key xxxxx'])
     ->getDota2Match()
     ->getMatchHistory();


 $api->byAccountId(67679224)->inXml();

```

We get list matches that correspond to "account id", in format xml.


```

 $api->byAccountId(67679224)
     ->byHeroId(45)
     ->gameMode(1)
     ->limit(100)
     ->inJson();
  
```

We get list matches that correspond to "account id", only with presence "Pugna", game mode all pick, max result 100, in format json.


## Search criteria

`->byPlayerName() //@TODO` (Optional) (string)
    Exact match of a player's display-name at the time of the match.
    
`->byHeroId()` (Optional) (uint32)
    A list of hero IDs can be found via the GetHeroes method. 
    
`->byAccountId()` (Optional) (string)
    32-bit account ID.     
    
`->gameMode()` (Optional) (uint32)

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
    16 - Captain's Draft

`->skill()` (Optional) (uint32)
    Skill bracket for the matches (Ignored if an account ID is specified).

    0 - Any
    1 - Normal
    2 - High
    3 - Very High


`->dateMin()` (Optional) (uint32)
    Minimum date range for returned matches (unix timestamp, rounded to the nearest day). 
    
`->dateMax()` (Optional) (uint32)
    Maximum date range for returned matches (unix timestamp, rounded to the nearest day). 
    
`->minPlayers()` (Optional) (string)
    Minimum amount of players in a match for the match to be returned.
    
`->leagueId()` (Optional) (string)
    Only return matches from this league. A list of league IDs can be found via the GetLeagueListing method. 
    
`->offset()` (Optional) (string)
    Start searching for matches equal to or older than this match ID. 
    
`->limit()` (Optional) (string)
    Amount of matches to include in results (default: 25). 
    
`->tournamentGamesOnly()` (Optional) (string)
    Whether to limit results to tournament matches. 
    
    
## Result data


    status
        1 - Success
        15 - Cannot get match history for a user that hasn't allowed it.

    statusDetail
        A message explaining the status, should status not be 1.
        
    num_results
        The number of matches in this response.
        
    total_results
        The total number of matches for the query.
        
    results_remaining
        The number of matches left for this query.
        
    matches
        A list of matches.

        match_id
            The matches unique ID. 
            
        match_seq_num
            A 'sequence number', representing the order in which matches were recorded. 
            
        start_time
            Unix timestamp of when the match began. 
            
        lobby_type

            -1 - Invalid
            0 - Public matchmaking
            1 - Practise
            2 - Tournament
            3 - Tutorial
            4 - Co-op with bots.
            5 - Team match
            6 - Solo Queue

        players
            The list of players within the match.

            account_id
                32-bit account ID. 
                
            player_slot
                See #Player Slot below. 
                
            hero_id
                The hero's unique ID. A list of hero IDs can be found via the GetHeroes method. 




##### Player Slot

A player's slot is returned via an 8-bit unsigned integer. The first bit represent the player's team, false if Radiant and true if dire. The final three bits represent the player's position in that team, from 0-4.

```
   ┌─────────────── Team (false if Radiant, true if Dire).
   │ ┌─┬─┬─┬─────── Not used.
   │ │ │ │ │ ┌─┬─┬─ The position of a player within their team (0-4).
   │ │ │ │ │ │ │ │
   0 0 0 0 0 0 0 0
```   
