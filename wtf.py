#!/usr/bin/env python

def wtf(a = list()):
    a.append("harmless?")
    return a

print("""
execute the following code and see how "a" is a static variable on the function:
def wtf(a = list()):
    a.append("harmless?")
    return a

for i in range(5):
    print wtf()
""")

for i in range(5):
    print((wtf()))

print("that's ok, now let's have a look at the global namespace: {}".format([item for item in dir() if not item.startswith("__")]))
print("oops, is it missing? Let's see the function namespace: {}".format([item for item in dir(wtf) if not item.startswith("__")]))
print("WTF")
