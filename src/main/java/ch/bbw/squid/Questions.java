package ch.bbw.squid;

public enum Questions {
    KINAESTHETIC1("", 1),
    KINAESTHETIC2("", 1),
    KINAESTHETIC3("", 1),
    KINAESTHETIC4("", 1),
    KINAESTHETIC5("", 1),
    LINGUISTIC1("", 2),
    LINGUISTIC2("", 2),
    LINGUISTIC3("", 2),
    LINGUISTIC4("", 2),
    LINGUISTIC5("", 2),
    NATURALISTIC1("", 3),
    NATURALISTIC2("", 3),
    NATURALISTIC3("", 3),
    NATURALISTIC4("", 3),
    NATURALISTIC5("", 3),
    VISUAL1("", 4),
    VISUAL2("", 4),
    VISUAL3("", 4),
    VISUAL4("", 4),
    VISUAL5("", 4),
    MUSICAL1("", 5),
    MUSICAL2("", 5),
    MUSICAL3("", 5),
    MUSICAL4("", 5),
    MUSICAL5("", 5),
    INTRAPERSONAL1("", 6),
    INTRAPERSONAL2("", 6),
    INTRAPERSONAL3("", 6),
    INTRAPERSONAL4("", 6),
    INTRAPERSONAL5("", 6),
    INTERPERSONAL1("", 7),
    INTERPERSONAL2("", 7),
    INTERPERSONAL3("", 7),
    INTERPERSONAL4("", 7),
    INTERPERSONAL5("", 7),
    LOGICAL1("", 8),
    LOGICAL2("", 8),
    LOGICAL3("", 8),
    LOGICAL4("", 8),
    LOGICAL5("", 8);


    private final String question;
    private final int type;

    Questions(String question, int type) {
        this.question = question;
        this.type = type;
    }

    public String getQuestion() {
        return question;
    }

    public int Type() {
        return type;
    }
}
