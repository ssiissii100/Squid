package ch.bbw.squid;

import org.springframework.http.HttpHeaders;
import org.springframework.stereotype.Controller;
import org.springframework.ui.Model;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.RequestHeader;

import java.time.LocalDate;
import java.util.ArrayList;
import java.util.Arrays;
import java.util.UUID;
@Controller
public class MainController {
    @GetMapping("")
    public  String home(){return "squid_index";}
    @GetMapping("/login")
    public  String login(){return "squid_login";}
    @GetMapping("/results")
    public  String results(){return "squid_results";}
    @GetMapping("/test")
    public  String test(){return "squid_test";}
    @GetMapping("/types")
    public  String types(){return "squid_types";}
}
