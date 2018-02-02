using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Collections;
namespace ConsoleApplication2
{
	public class Mp3
	{
		public int ID;
		public int Stor = 500;
		public string Make;
		public string Model;
		public int MB;
		public double Price;

		public Mp3(int _ID, string _Make, string _Model, int _MB, double _Price){
			this.ID = _ID;
			this.Make = _Make;
			this.Model = _Model;
			this.MB = _MB;
			this.Price = _Price;
		}
		public int Storage
		{
			get{return Stor;}
			set{Stor = value;}
		}

	}
}