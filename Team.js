class Team
{
  numPlayers; //int number of players
  name; // string team name
  players = []; //Player array
  record; //integer array where record[0] is the wins and record[1] is the losses


  /**
  * constructor
  * @pre none
  *	@param string name for the team
  * @param int number of players on the team
  *	@post none
  * @return none
  */
  constructor(name, numPlayers)
  {
    this.name = name;
    this.numPlayers = numPlayers;
    this.record = [0,0];
  }

  /**
  * @pre none
  *	@param none
  *	@post get the teams name
  * @return team's name
  */
  get name()
  {
    return this.name;
  }

  /**
  * @pre none
  *	@param string team name
  *	@post set the teams name
  * @return none
  */
  set name(name)
  {
    this.name = name;
  }

  /**
  * @pre none
  *	@param none
  *	@post get the number of players on the team
  * @return interger value for players on the team
  */
  get numPlayers()
  {
    return this.numPlayers;
  }

  /**
  * @pre none
  *	@param integer value for number of players on the team
  *	@post set the number of players on the team
  * @return none
  */
  set numPlayers(numPlayers)
  {
    this.numPlayers = numPlayers;
  }

  /**
  * @pre none
  *	@param User players name
  *	@post adds a User object to the team
  * @return none
  */
  addPlayer(playerName)
  {
    this.players.push(playerName);
    this.numPlayers++;
  }

  /**
  * @pre none
  *	@param User players name
  *	@post removes a User object from the team
  * @return none
  */
  removePlayer(playerName)
  {
    this.players.splice(this.players.indexOf(playerName),1);
  }

  /**
  * @pre none
  *	@param none
  *	@post adds a win to the win column
  * @return none
  */
  addWin()
  {
    this.record[0]++;
  }

  /**
  * @pre none
  *	@param none
  *	@post adds a loss to the loss column
  * @return none
  */
  addLoss()
  {
    this.record[1]++;
  }

}
