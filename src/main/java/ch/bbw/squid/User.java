package ch.bbw.squid;

/**
 * @author armi
 * the user object
 */
public class User {
    private String name;
    private int kinaesthetic;
    private int linguistic;
    private int naturalistic;
    private int visual;
    private int musical;
    private int intrapersonal;
    private int interpersonal;
    private int logical;

    /**
     * helper method for changing the value of an intelligence-type
     * @param position the position of the answer the user gave
     * @param question the enum you used to get the question
     */
    public void changeValueOfType(int position, Questions question) {
        int value = getValueOfPosition(position);
        switch (question.Type()) {
            case 1:
                kinaesthetic = kinaesthetic + value;
                break;
            case 2:
                linguistic = linguistic + value;
                break;
            case 3:
                naturalistic = naturalistic + value;
                break;
            case 4:
                visual = visual + value;
                break;
            case 5:
                musical = musical + value;
                break;
            case 6:
                intrapersonal = intrapersonal + value;
                break;
            case 7:
                interpersonal = interpersonal + value;
                break;
            case 8:
                logical = logical + value;
                break;
            default:
                throw new RuntimeException("wrong enum type was given to method!!!");
        }
    }

    /**
     * helper method to calculate the value based on the position
     * @param position the position of the answer the user gave
     * @return the calculated value based on the position
     */
    private int getValueOfPosition(int position) {
        int value = 0;
        switch (position) {
            case 0 -> {
                value = -2;
            }
            case 1 -> {
                value = -1;
            }
            case 2 -> {
                value = 0;
            }
            case 3 -> {
                value = 1;
            }
            case 4 -> {
                value = 2;
            }
            default -> {
                throw new RuntimeException("wrong position was given to method!!!");
            }
        }
        return value;
    }

    public String getName() {
        return name;
    }

    public void setName(String name) {
        this.name = name;
    }

    public int getKinaesthetic() {
        return kinaesthetic;
    }

    public int getLinguistic() {
        return linguistic;
    }

    public int getNaturalistic() {
        return naturalistic;
    }

    public int getVisual() {
        return visual;
    }

    public int getMusical() {
        return musical;
    }

    public int getIntrapersonal() {
        return intrapersonal;
    }

    public int getInterpersonal() {
        return interpersonal;
    }

    public int getLogical() {
        return logical;
    }
}
