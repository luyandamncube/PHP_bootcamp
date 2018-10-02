import json

# file = open("elements.json", "r")
# elem_file = file.read()
# file.close
# el = json.loads(elem_file)
with open("elements.json") as el_file:
    el = json.load(el_file)
    print("<!DOCTYPE html>")
    print('<html>')
    print('<head>')
    print('<link href="style.css" rel="stylesheet" type="text/css" media="all">')
    print('</head>')
    print('<body>')

    my_categories = {
            "alkali metal" : "td-alkalimetal",
            "alkaline earth  metal" : "td-alkaliearthmetal",
            "lanthanide" : "td-lanthinide",
            "actinide" : "td-actinide",
            "transition metal" : "td-tansitionmetal",
            "post-transition metal" : "td-tansitionmetal",
            "metalloid" : "td-metaloid",
            "diatomic nonmetal" : "td-alkalimetal",
            "polyatmoic non- metal" : "td-alkalimetal",
            "halogen" : "td-halogen",
            "noble gas" : "td-noblegas",
            "unknown, probably transition metal" : "td-tansitionmetal",
            "unknown, probably post-transition metal" : "td-tansitionmetal",
            }
    for i in range(118):
        category = str(el['elements'][i]['category'])
        if category == "alkali metal":
            colour = "white"
        elif category == "alkaline earth metal":
            colour = "yellow"
        elif category == "lanthanide":
            colour = "chocolate"
        elif category == "actinide":
            colour = "brown"
        elif category == "transition metal":
            colour = "grean"
        elif category == "post-transition metal":
            colour = "violet"
        elif category == "metalloid":
            colour = "fuchsia"
        elif category == "diatomic nonmetal":
            colour = "magenta"
        elif category == "polyatomic nonmetal":
            colour = "pink"
        elif category == "halogen":
            colour = "grey"
        elif category == "noble gas":
            colour = "red"
        elif category == "unknown, probably transition metal":
            colour = "tan"
        elif category == "unknown, probably post-transition metal":
            colour = "tan"
        else:
            colour = "grey"
        myshit = my_categories.get(category) 
        if not myshit:
            myshit = "td-alkaliearthmetal"
        print('<td class="' + myshit + '"><p class="weight">' + str(el['elements'][i]['atomic_mass']) + '</p><h2 class="h2" >' + str(el['elements'][i]['symbol']) + '</h2><p class="number">' + str(el['elements'][i]['number']) + '</p></td>')
        
