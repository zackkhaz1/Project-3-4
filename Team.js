class Team
{
  numPlayers;
  name;
  players = [];
  record; //integer array where record[0] is the wins and record[1] is the losses 

  constructor(name, numPlayers)
  {
    this.name = name;
    this.numPlayers = numPlayers;
    this.record = [0,0];
  }

  get name()
  {
    return this.name;
  }

  set name(name)
  {
    this.name = name;
  }

  get numPlayers()
  {
    return this.numPlayers;
  }

  set numPlayers(numPlayers)
  {
    this.numPlayers = numPlayers;
  }

  addPlayer(playerName)
  {
    this.players.push(playerName);
    this.numPlayers++;
  }

  removePlayer(playerName)
  {
    this.players.splice(this.players.indexOf(playerName),1);
  }

  addWin()
  {
    this.record[0]++;
  }

  addLoss()
  {
    this.record[1]++;
  }

}
