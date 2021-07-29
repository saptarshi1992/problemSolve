
//Add One To Number
//Problem Description

//Given a non-negative number represented as an array of digits, add 1 to the number ( increment the number represented by the digits ).

//The digits are stored such that the most significant digit is at the head of the list.
public class solve3 {
    public int[] plusOne(int[] A) {
        boolean carry = false;
		int arr_new[] = new int[A.length + 1];
		//int arr_remove[];
		int j = 0;
		int l = 0;
		int flag = 0;
		int base_value = A[0];
		int zero_count = 0;

		for (int i = A.length - 1; i >= 0; i--) {
			A[i] = A[i] + 1;
			if (A[i] == 10) {
				A[i] = 0;
				carry = true;
			} else {
				carry = false;
			}
			if (!carry) {

				/*if (arr[0] == 0) {
					flag = 2;
					while (l < arr_remove.length) {
						arr_remove[l] = arr[l + 1];
						l++;
					}
				}*/
				for(int r = 0;r<A.length; r++)
				{
					if(A[r] == 0)
					{
						zero_count++;
					}
					else
					{
						if(zero_count > 0)
						{
							int arr_remove[] = new int[A.length-zero_count];
							flag = 2;
							while (l < arr_remove.length) {
								arr_remove[l] = A[zero_count];
								zero_count++;
								l++;
								
							}
							
							return arr_remove;
						}
						else
						{
							break;
						}
					}
				}
				break;
			}
			if (i == 0) {
				if (carry == true && base_value > 8) {
					flag = 1;
					while (j < arr_new.length) {
						if (j == 0) {
							arr_new[j] = 1;

						} else {

							if (j == arr_new.length - 1) {
								arr_new[j] = 0;
							} else {
								arr_new[j] = A[j];
							}

						} // System.out.println(arr_new[j]);
						j++;

					}

				}
			}

		}

		// int k = 0;
		if (flag == 1) {
			return arr_new;
		} else {
			if (flag == 0) {
				return A;
			}
			
		}
		return A;

    }
}
