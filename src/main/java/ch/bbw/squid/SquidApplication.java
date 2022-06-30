package ch.bbw.squid;

import lombok.Getter;
import org.springframework.boot.SpringApplication;
import org.springframework.boot.autoconfigure.SpringBootApplication;

@SpringBootApplication
public class SquidApplication {

    private static ConnectionDB connectionDB;

    public static void main(String[] args) {
        SpringApplication.run(SquidApplication.class, args);
        connectionDB = new ConnectionDB("localhost", "squid_users", "root", "", 3306);

    }
}
