package ch.bbw.squid;

import org.springframework.boot.SpringApplication;
import org.springframework.boot.autoconfigure.SpringBootApplication;

@SpringBootApplication
public class SquidApplication {

    public static void main(String[] args) {
        SpringApplication.run(SquidApplication.class, args);
    }

    ConnectionDB dbcon = new ConnectionDB();

}
