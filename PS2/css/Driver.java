/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package practicalsession3;

/**
 *
 * @author userB12
 */
public class Driver {

    public static void main(String[] args) {
        Employee john = new Employee();
        john.setId(1);
        john.setName("John Doe");
        john.setBasicSalary(1000);
        john.work();
        System.out.println("John's Basic Salary is" + john.getBasicSalary());

        Employee jane = new Employee();
        jane.setId(2);
        jane.setName("Jane Doe");
        jane.setBasicSalary(5000);
        jane.work();
        System.out.println("Jane's Basic Salary is" + jane.getBasicSalary());

        Employee sam = new Employee();
        sam.work();
    }
}
