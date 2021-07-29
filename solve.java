Given an array of integers A, update every element with multiplication of previous and next elements with following exceptions.
a) First element is replaced by multiplication of first and second.
b) Last element is replaced by multiplication of last and second last.
public class solve1{
public static int solution-2(int A[])
{
int size = A.length;
        int arr[] = new int[size];
        for(int i = 0; i<A.length ; i++)
        {
            if(i == 0)
            {
                if(size == 1)
                {
                    arr[i] = A[i];
                }else{
                    arr[i] = A[i] * A[i+1];}
            }
            else if(i == size - 1)
            {
                arr[i] = A[i-1] * A[i];
            }
            else{
                arr[i] = A[i-1] * A[i+1];
            }
        }
        return arr;
}
public static void main(String args[])
{
int a[] = new int[]{1,2,3,4};
solution-2(a);
}
}
