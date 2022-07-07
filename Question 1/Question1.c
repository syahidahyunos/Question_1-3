//Question 1

#include <stdio.h>

int main(){
int i, j, n, rem;
    printf("Insert Odd number: ");
    scanf("%d", &n);
    rem = n % 2;
    if (rem == 0)
        printf("Please insert Odd number only for the star output\n", n);
    else
       for(i=0;i<n;i++)
   {
        for (i = 1; i <= n; ++i) {
      for (j = 1; j <= i; ++j) {
         printf("*");
      }
      printf("\n");
   }
   return 0;
}
}
