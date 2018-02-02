from PIL import Image


answer = ''
result = ''


def extract_morse(image):
    last = 0
    chars = []
    for i, v in enumerate(bytearray(Image.open(image).tobytes())):
        if v:
            chars.append(chr(i - last))
            last = i
    together = ''.join(chars)
    return together.split(' ')


char_morse_dict = {
    'A': '.-', 'B': '-...', 'C': '-.-.', 'D': '-..', 'E': '.', 'F': '..-.',
    'G': '--.', 'H': '....', 'I': '..', 'J': '.---', 'K': '-.-', 'L': '.-..',
    'M': '--', 'N': '-.', 'O': '---', 'P': '.--.', 'Q': '--.-', 'R': '.-.',
    'S': '...', 'T': '-', 'U': '..-', 'V': '...-', 'W': '.--', 'X': '-..-',
    'Y': '-.--', 'Z': '--..', '0': '-----', '1': '.----', '2': '..---', '3': '...--',
    '4': '....-', '5': '.....', '6': '-....', '7': '--...', '8': '---..', '9': '----.',
    '.': '.-.-.-', ',': '--..--', '?': '..--..', "'": '.----.', '/': '-..-.', '(': '-.--.-',
    ')': '-.--.-', ':': '---...', ';': '-.-.-.', '=': '-...-', '+': '.-.-.', '-': '-....-',
    '_': '..--.-', '"': '.-..-.', '$': '...-..-', '': ''
}


for val in extract_morse("C:\Users\Damian\Downloads\PNG.png"):
    for morse in char_morse_dict:
        if val == char_morse_dict[morse]:
            result += morse
print result

