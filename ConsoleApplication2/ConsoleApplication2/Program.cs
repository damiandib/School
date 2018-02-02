using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Collections;

namespace ConsoleApplication2
{
	enum LoginStatus
	{
		OK = 0,
		NietOK = 1,
		Onbekend = 2
	}

	static class Extension
	{
		public static bool IsNumeric (this string s)
		{
			float output;
			return float.TryParse (s, out output);
		}
	}

	class Program
	{
		private static List<Mp3> mps;

		static void Main (string[] args)
		{
			LogIn ();

			Console.ReadKey (true);
		}


		static LoginStatus LogIn ()
		{
			LoginStatus status = LoginStatus.Onbekend;
			int tries = 3;
			Console.Write ("Wat is uw naam: ");
			String name = Console.ReadLine ();

			do {
				Console.Write ("Voer uw wachtwoord in: ");
				if (Console.ReadLine () == "SHARPSOUND") {
					status = LoginStatus.OK;
					break;
				} else
					tries--;

				if (tries > 1)
					Console.WriteLine ("Verkeerd wachtwoord, {0} pogingen over!", tries);
				else if (tries == 0) {
					status = LoginStatus.NietOK;
					break;
				} else
					Console.WriteLine ("Verkeerd wachtwoord, laatste poging!", tries); 
			} while(tries >= 0);

			switch (status) {

			case LoginStatus.OK:
				Console.Clear ();
				Console.WriteLine ("Welkom bij SoundSharp, {0}\n", name);

				mps = new List<Mp3> ();
				mps.Add (new Mp3 (1, "GET Technologies .inc", "HF 410", 4096, 129.95));
				mps.Add (new Mp3 (2, "Far & Loud", "XM 600", 8192, 224.95));
				mps.Add (new Mp3 (3, "Innovative", "z3", 512, 79.95));
				mps.Add (new Mp3 (4, "Resistance S.A.", "3001", 4096, 124.95));
				mps.Add (new Mp3 (5, "CBA", "NXT Volume", 2048, 159.05));

				ShowMenu ();
                   
				return status;
				

			case LoginStatus.NietOK:
				Console.WriteLine ("Inloggen mislukt.");
				Console.ReadKey (true);
				Environment.Exit (0);
				return status;

			default:
				return LoginStatus.Onbekend;

			}
		}

		public static void ShowMenu ()
		{
			string[] menu = new string[9] {
				"Overzicht mp3 spelers", "Overzicht voorraad", "Mutate", "Statistieken", "Opties", "Test2", "Guide", "Lijnen", "Exit", 
			};
            
			for (int i = 0; i < 9; i++) {
				Console.WriteLine ("{0}. {1}", (i) + 1, menu [i]);   
			}
			Nav (menu);
            
		}

		static void Nav (string[] list)
		{ 
			ConsoleKeyInfo test;
			test = Console.ReadKey (true);
			switch (test.Key) {
			case ConsoleKey.D1:
				Console.Clear ();
				Console.WriteLine (list [0]);
				mp3 ();
				Console.ReadKey (true);
				break;

			case ConsoleKey.D2:
				Console.Clear ();
				Console.WriteLine (list [1]);
				Stor ();
				Console.ReadKey (true);
				break;

			case ConsoleKey.D3:
				Console.Clear ();
				Console.WriteLine (list [2]);
				Mutate ();
				Console.ReadKey (true);
				break;

			case ConsoleKey.D4:
				Console.WriteLine (list [3]);
				Console.ReadKey (true);
				Console.Clear ();
				Statistic ();
				break;

			case ConsoleKey.D5:
				Console.WriteLine (list [4]);
				Console.ReadKey (true);
				Console.Clear ();
				ShowMenu ();
				break;

			case ConsoleKey.D6:
				Console.WriteLine (list [5]);
				Console.ReadKey (true);
				Console.Clear ();
				ShowMenu ();
				break;

			case ConsoleKey.D7:
				Console.WriteLine (list [6]);
				Console.ReadKey (true);
				Console.Clear ();
				ShowMenu ();
				break;

			case ConsoleKey.D8:
				Console.WriteLine (list [7]);
				Console.ReadKey (true);
				Console.Clear ();
				ShowMenu ();
				break;
                
			case ConsoleKey.D9:
				Environment.Exit (0);
				break;
			}
		}

		static void mp3 ()
		{
			foreach (var uh in mps)
				Console.WriteLine ("ID:\t\t{0}\nMake:\t\t{1}\nModel:\t\t{2}\nSize in MB:\t{3}\nPrice:\t\t{4}\n", uh.ID, uh.Make, uh.Model, uh.MB, uh.Price);


			Console.WriteLine ("Druk op 8 om terug te gaan naar het menu");
			ConsoleKeyInfo exit;
			exit = Console.ReadKey (true);
			switch (exit.Key) {
			case ConsoleKey.D8:
				Console.Clear ();
				ShowMenu ();
				break;
			default :
				Console.Clear ();
				mp3 ();
				break;
			}
		}

		static void Stor ()
		{
			foreach (var St in mps)
				Console.WriteLine ("\nID:\t\t{0}\nIn storage:\t{1}", St.ID, St.Storage);
			Console.WriteLine ("Druk op 8 om terug te gaan naar het menu");
			ConsoleKeyInfo exit;
			exit = Console.ReadKey (true);
			switch (exit.Key) {
			case ConsoleKey.D8:
				Console.Clear ();
				ShowMenu ();
				break;
			default :
				Console.Clear ();
				Stor ();
				break;
			}
		}

		static void Mutate ()
		{
			foreach (var St in mps)
				Console.WriteLine ("ID: {0}\t Storage: {1}", St.ID, St.Stor);
			Console.Write ("Geef een ID: ");
			string inv = Console.ReadLine ();
			foreach (var St in mps) {
				if (Extension.IsNumeric (inv)) {
					int invint = Convert.ToInt32 (inv);
					if (Equals (St.ID, invint)) {
						Console.Write ("Geef nieuwe vooraad aan: ");
						string mut = Console.ReadLine ();
						int intmut = Convert.ToInt32 (mut);
						if (intmut < 0) {
							Console.WriteLine ("Voorraad kan niet negatief zijn\ndruk op een knop om verder te gaan.");
							Console.ReadKey (true);
							Console.Clear ();
							Mutate ();
						} else {
							St.Storage = intmut;
							Console.WriteLine ("\nDe nieuwe voorraad is {0}", St.Storage);
						}

						Console.WriteLine ("\nDruk op 8 om terug te gaan naar het menu, of druk op R om nog meer aan te passen");
						ConsoleKeyInfo exit;
						exit = Console.ReadKey (true);
						switch (exit.Key) {
						case ConsoleKey.R:
							Console.Clear ();
							Mutate ();
							break;
						case ConsoleKey.D8:
							Console.Clear ();
							ShowMenu ();
							break;
						default :
							
							break;
						}
					}
				} else {
					Console.WriteLine ("\nGeen nummer opgegeven\n");
					Mutate ();
				}

			}
			Console.ReadKey (true);
			

		}
		static void Statistic ()
		{
			int total = 0;
			Console.WriteLine ("Statistieken: ");
			foreach (var St in mps) 
			{
				total = St.Storage;

			}
			Console.WriteLine (total + total + total + total + total);
			ConsoleKeyInfo exit;
			exit = Console.ReadKey (true);
			switch (exit.Key) {
			case ConsoleKey.D8:
				Console.Clear ();
				ShowMenu ();
				break;
			default :
				Console.Clear ();
				Statistic ();
				break;
			}
		}
	}
}

