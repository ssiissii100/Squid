package ch.bbw.squid;

public enum Questions {
    KINAESTHETIC1(""),
    KINAESTHETIC2(""),
    KINAESTHETIC3(""),
    KINAESTHETIC4(""),
    KINAESTHETIC5(""),
    LINGUISTIC1(""),
    LINGUISTIC2(""),
    LINGUISTIC3(""),
    LINGUISTIC4(""),
    LINGUISTIC5(""),
    NATURALISTIC1(""),
    NATURALISTIC2(""),
    NATURALISTIC3(""),
    NATURALISTIC4(""),
    NATURALISTIC5(""),
    VISUAL1(""),
    VISUAL2(""),
    VISUAL3(""),
    VISUAL4(""),
    VISUAL5(""),
    MUSICAL1(""),
    MUSICAL2(""),
    MUSICAL3(""),
    MUSICAL4(""),
    MUSICAL5(""),
    INTRAPERSONAL1(""),
    INTRAPERSONAL2(""),
    INTRAPERSONAL3(""),
    INTRAPERSONAL4(""),
    INTRAPERSONAL5(""),
    INTERPERSONAL1(""),
    INTERPERSONAL2(""),
    INTERPERSONAL3(""),
    INTERPERSONAL4(""),
    INTERPERSONAL5(""),
    LOGICAL1(""),
    LOGICAL2(""),
    LOGICAL3(""),
    LOGICAL4(""),
    LOGICAL5("");


    private final String question;
    
    Questions(String question) {
        this.question = question;
    }
}
