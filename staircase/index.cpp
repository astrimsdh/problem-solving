#include <bits/stdc++.h>

using namespace std;

// Complete the staircase function below.
void staircase(int n) {
    for(int i = 0; i < n; i++){
        for(int j = 0; j < n; j++){
            if(j >= (n - 1 - i)){
                cout<<"#";
            }else{
                cout<<" ";
            }
        }
        cout<<endl;
    }
}

int main()
{
    int n;
    cin >> n;
    cin.ignore(numeric_limits<streamsize>::max(), '\n');

    staircase(n);

    return 0;
}
