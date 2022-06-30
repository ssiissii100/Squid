package ch.bbw.squid;

import java.nio.charset.StandardCharsets;
import com.google.common.hash.Hashing;

public class Hasher {
    public String generateSHA256HASH(String password){

        String sha256hex = Hashing.sha256()
                .hashString(password, StandardCharsets.UTF_8)
                .toString();
        return sha256hex;
    }
}
