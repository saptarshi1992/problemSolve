
// Time to equality
// Problem Description

// Given an integer array A of size N. In one second you can increase the value of one element by 1.

// Find the minimum time in seconds to make all elements of the array equal.
  public class solve2 {
	public static int solve(int[] A) {
		int temp;
		int sec = 0;
		int max;
		temp = A[0];
		for (int i = 0; i < A.length; i++) {
			if (temp > A[i]) {
				continue;
			} else {
				temp = A[i];
			}
		}

		for (int j = 0; j < A.length; j++) {
			if (temp != A[j]) {
				max = temp - A[j];
				sec = sec + max;
			}
		}
		return sec;

	}

	public static void main(String args[]) {
		int A[] = new int[] {2, 4, 1, 3, 2};
		int count = solve(A);
		System.out.print(count);

	}
}
