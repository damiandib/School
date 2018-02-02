using System;
using System.Web;
using System.Runtime.CompilerServices;
using System.IO;

namespace AudioDevices.Track
{
	class Track
	{
		private int id;
		private string name;
		private string artist;
		private string albumSource;

		private enum style
		{
			Ambient = 0,
			Blues = 1,
			Country = 2,
			Disco = 3,
			Electro = 4,
			Hardcore = 5,
			HardRock = 6,
			HeavyMetal = 7,
			Hiphop = 8,
			Jazz = 9,
			Jumpstyle = 10,
			Klassiek = 11,
			Latin = 12,
			Other = 13,
			Pop = 14,
			Punk = 15,
			Reggae = 16,
			Rock = 17,
			Soul = 18,
			Trance = 19,
			Techno = 20
		}

		public struct Time
		{
			public Time (int seconds)
			{
				int i = 0;
				while (seconds >= 60) {
					i++;
					seconds -= 60;
				}
				new Time (i, seconds);
			}

			public Time (int minutes, int seconds)
			{
				int i = 0;
				while (minutes >= 60) {
					i++;
					minutes -= 60;
				}
				new Time (i, minutes, seconds);
			}

			public Time (int hours, int minutes, int seconds)
			{
				if (hours == 1) {
					Console.WriteLine ("{0} Uur {1} Minuten en {2} Seconde", hours, minutes, seconds);
				} else {
					Console.WriteLine ("{0} Uren {1} Minuten en {2} Seconde", hours, minutes, seconds);
				}

			}
		}

		public Track ()
		{	
			Console.WriteLine ("Unkown - Unkown - Unkown");
		}

		public Track (int id)
		{
			Track Tr = new Track ();
			Tr.id = id;
			Console.WriteLine ("{0} - Unknown - Unknown",Tr.id);
		}

		public Track (int id, string name)
		{
			Track Tr = new Track (); 
			Tr.id = id;
			Tr.name = name;
			Console.WriteLine ("{0} - {1} - Unknown",Tr.id, Tr.name);
		}

		public Track (int id, string artist, string name)
		{
			Track Tr = new Track (); 
			Tr.id = id;
			Tr.name = name;
			Tr.artist = artist;
			Console.WriteLine ("{0} - {1} - {2}",Tr.id, Tr.artist, Tr.name);
		}
		//public void GetLength()
		//{
		//	long fileSize = 0;

		//	System.IO.FileInfo fi = new FileInfo(fileName);

		//	fileSize = fi.Length;
			
		//}


	}
}
