 //Odd Even Subsequences
 //Given an array of integers A of size N. Find the longest subsequence of A which is odd-even.
public class solve1 {
	public static int solve(int[] A) {

		int subsqn = 0;
		int oddflag = 0;
		int evenflag = 0;
		for (int i = 0; i < A.length; i++) {
			if (i == 0) {
				subsqn++;
				
				if (A[i] % 2 == 0) {
					evenflag = 1;
				} else {
					oddflag = 1;
				}
			} else if (A[i] % 2 == 0) {
				if (oddflag == 1) {
					subsqn++;
					
					oddflag = 0;
					evenflag = 1;
				} else {
					continue;
				}
			} else if (A[i] % 2 != 0) {
				if (evenflag == 1) {
					subsqn++;
					
					oddflag = 1;
					evenflag = 0;
				} else {
					continue;
				}
			}
		}
		return subsqn;
	}

	public static void main(String args[]) {
		int A[] = new int[] { 12, 10, 28, 37, 43, 40, 14, 12, 48 };
		int count = solve(A);
		System.out.print(count);
		

	}
}
