
class User
{
  userName;
  password;
  onTeam;
  team;

  constructor(username, password)
  {
    this.userName = username;
    this.password = password;
    this.onTeam = false;
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


}
