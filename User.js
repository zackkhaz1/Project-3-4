
class User
{
  userName;
  password;
  onTeam;
  team;
  record; //integer array where record[0] is the wins and record[1] is the losses 

  constructor(username, password)
  {
    this.userName = username;
    this.password = password;
    this.onTeam = false;
    this.record = [0,0];
  }

  get userName()
  {
    return this.userName;
  }

  set userName(username)
  {
    this.userName = username;
  }


  get password()
  {
    return this.password;
  }

  set password(password)
  {
    this.password = password;
  }


  get team()
  {
    return this.team;
  }

  set team(team)
  {
    this.team = team;
    this.onTeam = true;
  }


  isOnTeam()
  {
    return this.onTeam;
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
