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
public class Employee {
    private int id;
    private String name;
    private double basicSalary;

    public void setId(int id) {
        this.id = id;
    }
    public int getId() {
        return id;
    }
    public void setName(String name) {
        this.name = name;
    }
    public String getName() {
        return name;
    }
    public void setBasicSalary(double basicSalary) {
        if (basicSalary > 100) {
            this.basicSalary = basicSalary;
        } else {
            this.basicSalary = 100;
        }
    }

    public double getBasicSalary() {
        return basicSalary;
    }

    void work() {
        System.out.println("I'm working");
    }

    double calcSalary() {
        return 0;
    }
}
