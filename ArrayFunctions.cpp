  // This program will calculate the average of a specific set of values
  // in an Array

  //This version a search function and display to the previous program

  #include <iostream>

float arrayAverage(int A[], int size);
//Precondition: A is an Array with values
  //20,30,45,15,77,45,90,55,78,80
  //size is a positive integer corresponding to number of elements in A
//Postcondition: Average of values in A has been returned

int valueSearch(int A[], int value, int size);
//Precondition: A is an Array with values
  //20,30,45,15,77,45,90,55,78,80
  //value is an input from user
  //size is a positive integer corresponding to number of elements in A
//Postcondition: Program returns location of value if found
  int main()
{
    const int A_SIZE = 10; //variable for size of Array

    int givenArray[A_SIZE] = {20,30,45,15,77,45,90,55,78,80}; //create array with given values
    //float average = arrayAverage(givenArray, A_SIZE);    //calculate the average of our given array
    //std::cout<<"The average of your array is " << average; //display average to terminal
    std::cout<<"Please enter the number you would like to find\n";  //prompt user for a search
    int userWanted;           //variable for user search element
    std::cin>>userWanted;

    int searchResults = valueSearch(givenArray, userWanted, A_SIZE);  //call search function to look for value
    if (searchResults == -1)      // -1 is magic number corresponding to not found; default value of search function
        std::cout<<"not found";
    else                          //if found value element of array is printed to terminal
    {
        std::cout<<userWanted <<" was found at location " <<searchResults << " in the array";
    }

    return 0;
}

float arrayAverage(int A[], int size)
{
  int count = 0; float total = 0;
  for (int i = 0; i < size; i++)
  {
    total += A[i];
    count++;
  }
  float average = total/count;
  return average;
}

int valueSearch(int A[], int value, int size)
{
  int elementLocation = -1;    //variable to hold element of array where value found; -1 is default value for not found
  for (int i = 0; i < size; i++)    //check all elements in array
  {
    if (A[i] == value)
      elementLocation = i+1;      //if value found update element location
  }
  return elementLocation;
}
