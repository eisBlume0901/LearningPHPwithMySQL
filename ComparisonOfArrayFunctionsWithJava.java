import java.util.*;
import java.util.stream.Collectors;

public class Main {
    public static void main(String[] args) {

        List<Integer> numbers = Arrays.asList(1, 2, 3, 4, 5, 6);

        List<Integer> evenNumbers = numbers.stream().map(x -> x * 2).collect(Collectors.toList());
        System.out.println(evenNumbers); // [2, 4, 6, 8, 10, 12]

        List<Integer> lessThan10 = evenNumbers.stream().filter(numb -> numb < 10).collect(Collectors.toList());
        System.out.println(lessThan10); // [2, 4, 6, 8]

        int sum = lessThan10.stream().reduce(0, (subtotal, element) -> subtotal + element); // Identity is set to 0 which means it stores the initial value of the reduction operation
        System.out.println(sum); // 20

        int sumWithBase5 = lessThan10.stream().reduce(5, (subtotal, element) -> subtotal + element);
        System.out.println(sum); // 25
    }
}