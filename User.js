
class User
{
  userName; //string username
  password; //string password
  onTeam; //bool true if on team false otherwise
  team; //Team team the user is on
  record; //int array where record[0] is the wins and record[1] is the losses


  /*
  * constructor
  * @pre none
  *	@param string username for the user
  * @param string password for the user
  *	@post none
  * @return none
  */
  constructor(username, password)
  {
    this.userName = username;
    this.password = password;
    this.onTeam = false;
    this.record = [0,0];
  }

  /*
  * @pre none
  *	@param none
  *	@post get the user's name
  * @return user's name
  */
  get userName()
  {
    return this.userName;
  }

  /*
  * @pre none
  *	@param string user name
  *	@post set the user's name
  * @return none
  */
  set userName(username)
  {
    this.userName = username;
  }

  /*
  * @pre none
  *	@param none
  *	@post get the user's password
  * @return user's password
  */
  get password()
  {
    return this.password;
  }

  /*
  * @pre none
  *	@param string user password
  *	@post set the user's password
  * @return none
  */
  set password(password)
  {
    this.password = password;
  }

  /*
  * @pre none
  *	@param none
  *	@post get the user's team
  * @return user's team
  */
  get team()
  {
    return this.team;
  }

  /*
  * @pre none
  *	@param Team user team
  *	@post set the user's team
  * @return none
  */
  set team(team)
  {
    this.team = team;
    this.onTeam = true;
  }

  /*
  * @pre none
  *	@param none
  *	@post bool check if user is on a team
  * @return true if already on a team, false otherwise
  */
  isOnTeam()
  {
    return this.onTeam;
  }

  /*
  * @pre none
  *	@param none
  *	@post adds a win to the win column
  * @return none
  */
  addWin()
  {
    this.record[0]++;
  }

  /*
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


function createUser()
  {
    var name = document.getElementById(newUsername).value;
    var pass = document.getElementById(newPassword).value;
    let user = new User(name, pass);
  }
