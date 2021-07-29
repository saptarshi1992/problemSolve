// Multiple left rotations of the array
// Problem Description

// Given an array of integers A and multiple values in B which represents number of times array A needs to be left rotated.

// Find the rotated array for each value and return the result in the from of a matrix where i'th row represents the rotated array for the i'th value in B.
public class Solution {
    public int[][] solve(int[] A, int[] B) {
        int blen = B.length;
        int len = A.length;
        int arr[][] = new int[blen][len];
        
        for(int i = 0; i < blen ;i++)
        {
            int index = B[i] % len;
            
            for(int j=0 ; j<len ; j++)
            {
                arr[i][j] = A[index];
                
                index = (index+1) % len;
            }
        }
        return arr;
    }
  public static void main(String args[])
  {
    int A[] = new int[]{1,2,3,4,5};
    int B[] = new int[]{2,3};
    solve(A,B);
  }
}
