<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}


// import java.util.*;
// public class sum_of_primes {

//     public static void main(String[] args) {
//         Scanner sc = new Scanner(System.in);
//         System.out.print(“Enter a number: “);
//         int number = sc.nextInt();
//         boolean flag = false;
//         for (int i = 2; i <= number / 2; ++i) {

//         if (sum_of_primes(i)) {

//             if (sum_of_primes(number – i)) {

//                 System.out.printf(“%d can be expressed as the sum of %d and %d\n”, number, i, number – i);
//                 flag = true;
//             }

//             }
//         }

//         if (!flag)
//         System.out.println(number + ” cannot be expressed as the sum of two prime numbers.”);
//     }

//    public static boolean sum_of_primes(int num) {
//         boolean isPrime = true;

//         for (int i = 2; i <= num / 2; ++i) {
//             if (num % i == 0) {
//             isPrime = false;
//             break;
//             }
//         }

//         return isPrime;
//     }
// }