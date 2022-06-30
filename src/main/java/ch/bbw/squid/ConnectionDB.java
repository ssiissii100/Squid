package ch.bbw.squid;

import java.sql.*;
import java.util.Properties;

public class ConnectionDB {

    static final String url = "jdbc:mariadb://localhost:3306/squid_users";
    static final String user = "root";
    static final String password = "";
    static final String query = "SELECT * FROM user";

    public static void main(String[] args) {
        // Open a connection

        try (Connection conn = DriverManager.getConnection(url, user, password)) {
            Statement stmt = ((java.sql.Connection) conn).createStatement();
            ResultSet rs = stmt.executeQuery(query);
            // Extract data from result set
            while (rs.next()) {
                // Retrieve by column name
                System.out.print("UserID: " + rs.getInt("user_id"));
                System.out.print(", Username: " + rs.getString("username"));
                System.out.print(", Passwordhash: " + rs.getString("password_hash"));
                System.out.println(", Created: " + rs.getDate("created"));
            }
        } catch (SQLException e) {
            e.printStackTrace();
        }
    }
}
