//BAHASA JAVA
//Number 01

// import java.io.*; 
// import java.lang.Math; 
import java.util.*; 

public class MyClass {
    
    static boolean prime[] = new boolean[100005]; 
    
    static void CheckPrimesValue(int n) 
    { 
  
        Arrays.fill(prime, true); 
        prime[1] = false; 
  
        for (int p = 2; p * p <= n; p++) 
        { 
            if (prime[p]) { 
  
                for (int i = p * 2; i < n; i += p) 
                { 
                    prime[i] = false; 
                } 
            } 
        } 
    } 
    
     static void sortPrimes(int arr[], int n) 
    { 
        CheckPrimesValue(100005); 
  
        Vector<Integer> v = new Vector<Integer>(); 
  
        for (int i = 0; i < n; i++) 
        { 
  
        
            if (prime[arr[i]])  
            { 
                v.add(arr[i]); 
            } 
        } 
        Comparator comparator = Collections.reverseOrder(); 
        Collections.sort(v, comparator); 
  
        int j = 0; 

        for (int i = 0; i < n; i++)  
        { 
            if (prime[arr[i]])  
            { 
                arr[i] = v.get(j++); 
            } 
        } 
    }
    
        public static void main(String args[]) {
        int arr[] = {3, 8, 45, 12, 78, 30, 79, 1}; 
        int n = arr.length; 
  
        sortPrimes(arr, n); 

        for (int i = 0; i < n; i++)  
        { 
            System.out.print(arr[i] + " "); 
        } 
    }
    
}


// Number 02

import java.util.*; 

public class Number02{

     public static boolean isPrime(int x) 
    { 
        if (x == 0 || x == 1) 
            return false; 
              
        for (int i = 2; i * i <= x; ++i)  
            if (x % i == 0) 
                return false;  
        return true; 
    } 
    
    public static void findPrimes(int n) 
    { 
        if (isPrime(n)) 
            System.out.print( n ); 
    
        else if (isPrime(n - 2)) 
            System.out.print( 2 + " " +  
                              (n - 2) ); 
  
        else 
        { 
            System.out.print( 3 + " "); 
            n = n - 3; 
              
            for (int i = 0; i < n; i++) { 
                if (isPrime(i) && isPrime(n - i)) { 
                    System.out.print( i + " " +  
                                         (n - i)); 
                    break; 
                } 
            } 
        } 
    } 
     
     
     public static void main(String []args){
        int n = 8; 
        findPrimes(n); 
     }
}

