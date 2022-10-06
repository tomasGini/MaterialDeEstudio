#include <iostream>
#include <string>
using namespace std;

struct pacientes				//Estructura de datos (Pacientes)
	{
		int dni;
		int num_tel;
		string nombre;
		string apellido;
	}; 

void alta_paciente()
{
	pacientes un_paciente;		//Creacion de una variable y de tipo de dato la estructura pacientes

	cout << "--Funcion alta pacientes--\n";
	
	cout << "Ingrese el dni:  \n";
	cin >> un_paciente.dni;
	
	cout << "Ingrese el nombre:  \n";
	cin >> un_paciente.nombre;
	
	cout << "Ingrese el apellido:  \n";
	cin >> un_paciente.apellido;
			
	cout << "Ingrese el numero de telefono:  \n";
	cin >> un_paciente.num_tel;
	
	cout << "DNI: " << un_paciente.dni << "\n";	
	cout << "Nombre: " << un_paciente.nombre <<"\n";
	cout << "Apellido: " << un_paciente.apellido <<"\n";
	cout << "Numero Tel: " << un_paciente.num_tel <<"\n";
}
int main()
{
	alta_paciente();
}
