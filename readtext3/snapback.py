import sys
from PIL import Image
import pyocr
import pyocr.builders
import io
tool = pyocr.get_available_tools()[0]
#lang = tool.get_available_languages()[1]
lang = 'aze'
imfile = str(sys.argv[1]);
im = Image.open(imfile)
print(tool.image_to_string(im,lang))
