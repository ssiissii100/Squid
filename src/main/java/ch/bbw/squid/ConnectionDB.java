package ch.bbw.squid;
import lombok.Getter;
import java.sql.*;
import java.util.concurrent.ExecutorService;
import java.util.concurrent.Executors;

public class ConnectionDB {

    private Connection connection;

    @Getter
    private final ExecutorService pool = Executors.newCachedThreadPool();

    public ConnectionDB(String host, String database, String username, String password, int port) {
        System.out.println("Connecting to database " + database + "...");
        if (this.connect(host, database, username, password, port)) {
            System.out.println("Successfully connected to database " + database + "!");
            return;
        }
        System.out.println("Can't connect to " + database + "! Shutting down...");
    }

    private boolean connect(String host, String database, String username, String password, int port) {
        try {

            this.connection = DriverManager.getConnection(
                    "jdbc:mariadb://" + host + ":" + port +"/",
                    username, password
            );
        } catch (Exception e) {
            System.out.println("Connection error! (DB: " + database + ")");
            e.printStackTrace();
        }
        return this.isConnected();
    }

    public boolean disconnect() {
        if (!this.isConnected()) {
            return true;
        }

        try {
            this.connection.close();
            return true;
        } catch (SQLException e) {
            System.out.println("Can't close connection!");
            e.printStackTrace();
            return false;
        }
    }

    public boolean isConnected() {
        try {
            return this.connection != null && !this.connection.isClosed();
        } catch (SQLException e) {
            e.printStackTrace();
        }
        return false;
    }
}

