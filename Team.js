class Team
{
  numPlayers;
  name;
  players = [];

  constructor(name, numPlayers)
  {
    this.name = name;
    this.numPlayers = numPlayers;
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

}
