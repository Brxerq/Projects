from tkinter import *
from tkinter import messagebox
from datetime import datetime
from item import Item
class ItemWindow:
   def __init__(self, master, store):
      self.master = master
      self.store = store
      self.master.title("Grocery Store")
      self.master.geometry("600x400")
      self.widgets()
   def widgets(self):
      label = Label(self.master, text = "WELCOME TO GROCERY STORE", font = ("Halvetica",  15))
      label.pack(pady = 10)

      label1 = Label(self.master, text = "Fill in the following details:", font = ("Halvetica",  10))
      label1.pack()

      master = Frame(self.master)
      master.pack()
      label = Label(master, text = "Name: ", width = 25, anchor=W)
      self.nameEntry = Entry(master, width = 30)
      label.pack(side = LEFT, pady = 10)
      self.nameEntry.pack(side = LEFT, pady = 10)

      master = Frame(self.master)
      master.pack()
      label = Label(master, text = "Expiry Date (DD-MM-YYYY): ", width = 25, anchor=W)
      self.expiryEntry = Entry(master, width = 30)
      label.pack(side = LEFT, pady = 10)
      self.expiryEntry.pack(side = LEFT, pady = 10)

      master = Frame(self.master)
      master.pack()
      label = Label(master, text = "Quantity: ", width = 25, anchor=W)
      self.quantityEntry = Entry(master, width = 30)
      label.pack(side = LEFT, pady = 10)
      self.quantityEntry.pack(side = LEFT, pady = 10)

      master = Frame(self.master)
      master.pack()
      label = Label(master, text = "Price ($): ", width = 25, anchor=W)
      self.priceEntry = Entry(master, width = 30)
      label.pack(side = LEFT, pady = 10)
      self.priceEntry.pack(side = LEFT, pady = 10)

      master = Frame(self.master)
      master.pack(pady = 10)
      backButton = Button(master, text = "BACK", width = 20, command = self.back)
      backButton.pack(side = LEFT, padx = 10)
      proceedButton = Button(master, text = "PROCEED", width = 20, command = self.proceed)
      proceedButton.pack(side = LEFT)

   def back(self):
      from main import Main
      window = Toplevel(self.master)
      Main(window)
      self.master.withdraw()

   def proceed(self):
      name = self.nameEntry.get()
      price = self.priceEntry.get()
      quantity = self.quantityEntry.get()
      expiry = self.expiryEntry.get()
      if name != "":
         if price != "":
            try:
               price = float(price)
               if quantity != "":
                  try:
                     quantity = int(quantity)
                     try:
                        expiry = datetime.strptime(expiry, '%d-%m-%Y')
                        item = Item(name, expiry, price, quantity)
                        if self.checkIfExits(item):
                           pass
                        else:
                           self.store.addItem(item)
                        self.modifyFile()
                        messagebox.showinfo("Success!", "Operation successfull")
                     except Exception as e:
                        print(e)
                        messagebox.showerror("Error!", "Invalid date value. It must be in this format: DD-MM-YYYY")
                  
                  except Exception:
                     messagebox.showerror("Error!", "Invalid quantity value")
                  
               else:
                  messagebox.showerror("Error!", "Quantity field cannot be empty")
            except Exception:
               messagebox.showerror("Error!", "Invalid price value.")
         else:
            messagebox.showerror("Error!", "Price field cannot be empty")
      else:
         messagebox.showerror("Error!", "Name field cannot be empty")

   def checkIfExits(self, item):
      for itm in self.store.items:
         if item.name == itm.name:
            if item.expiryDate == itm.expiryDate:
               itm.quantity += item.quantity
               return True
      return False
   def modifyFile(self):
      itemString = ""
      for item in self.store.items:
         itemString += item.name + "," + item.expiryDate.strftime("%d-%m-%Y")+ "," + str(item.price) +"," + str(item.quantity) + "\n"
      file = open("items.txt", "w")
      file.write(itemString)
      file.close()
   
      
if __name__ == "__main__":
   root = Tk()
   ItemWindow(root)
   root.mainloop()
