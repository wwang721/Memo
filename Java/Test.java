//import java.io.*;

public class Test{

    public static void main(String[] args){
        Puppy puppyOne = new Puppy("Alpha");
        Puppy puppyTwo = new Puppy("Beta");

        puppyOne.setAge(2);
        puppyOne.setWeight(3);
        puppyOne.printPuppy();
        System.out.println();

        puppyTwo.setAge(3);
        puppyTwo.setWeight(2);
        puppyTwo.printPuppy();
    }

}