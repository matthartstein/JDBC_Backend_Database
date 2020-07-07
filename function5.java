import java.sql.*;

/*
jdbc_insert_restaurant.java    // java program that is called by php that just does the insert; calls jdbc_db.java to connect and do the actual insert
jdbc_db.java // class (no main program) that has useful methods
*/

public class function5
{
   // The main program that inserts a restaurant
   public static void main(String[] args) throws SQLException
   {
      String Username = "mshartst";              // Change to your own username
      String mysqlPassword = "gieJei9m";    // Change to your own mysql Password

      // Connect to the database
      jdbc_db myDB = new jdbc_db();
      myDB.connect(Username, mysqlPassword);
      myDB.initDatabase();

      // For debugging purposes:  Show the database before the insert
      StringBuilder builder = new StringBuilder();
      String query1 = "SELECT * from COURSE";
      //builder.append("<br> View all Students:" + myDB.query(query1) + "<br>");

      // Parse input string to get restauranrestaurant Name and Address
      //String restaurant = "4";
      //String name = "NAME";
      //String type = "TYPE";
      //String city = "CITY";

      //String StudentId = args[0];
      //String StudentName = args[1];
      //String Major = args[2];
      //String Hours = args[3];

      // Read command line arguments
      // args[0] is the first parameter
      //name = args[0];
      //type = args[1];
      //city = args[2];

      // Insert the new restaurant
      //String input = "'" + StudentId + "','" + StudentName + "','" + Major + "','" + Hours + "'";
      //myDB.insert("COURSE", input);    // insert new restaurant

      // For debugging purposes:  Show the database after the insert
      builder.append("<br><br><br> View All Courses:" + myDB.query(query1));
      System.out.println(builder.toString());

      myDB.disConnect();
   }
}
