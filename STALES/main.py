from tkinter import *
from datetime import datetime
from tkinter import messagebox
from tkinter import simpledialog
from item import Item
from store import Store
from itemwindow import ItemWindow
'''
Main class is the driver class of the program
It is used to create the gui as well as validate all the inputs
before any operation for the store
'''

class Main:
   def __init__(self, master):
      '''
      Constructor of this class initalizes the window (set title, window size etc.)
      as well as add some items in the store as default to view the items
      '''
      self.master = master
      self.master.title("Grocery Store")
      self.master.geometry("600x400")
      self.items = []
      self.store = Store(self.items)
      self.readItems()
      self.widgets()


   def readItems(self):
      items = open("items.txt").readlines()
      for item in items:
         itemDetails = item.split(",")
         item1 = Item(itemDetails[0], datetime.strptime(itemDetails[1], '%d-%m-%Y'), float(itemDetails[2]), int(itemDetails[3]))
         self.store.addItem(item1)
      
   def widgets(self):
      '''
      This functions servers the functionality of adding widgets on the window
      It adds different buttons and allocates the function behind every button
      '''
      label = Label(self.master, text = "WELCOME TO GROCERY STORE", font = ("Halvetica",  15))
      label.pack(pady = 10)

      label1 = Label(self.master, text = "Select an option from the following menu:", font = ("Halvetica",  10))
      label1.pack()

      frame = Frame(self.master)
      frame.pack(side = LEFT, padx = 50)

      frame1 = Frame(self.master)
      frame1.pack(side = RIGHT, padx = 50)
      
      addITEMButton = Button(frame, text = "ADD ITEM", width = 25, command = self.addItem)
      addITEMButton.pack(pady = 10)

      removeITEMButton = Button(frame, text = "REMOVE ITEM", width = 25, command = self.removeItem)
      removeITEMButton.pack(pady = 10)

      editITEMButton = Button(frame, text = "EDIT ITEM", width = 25, command = self.editItem)
      editITEMButton.pack(pady = 10)

      viewExpiredITEMButton = Button(frame1, text = "VIEW EXPIRED/UNLISTED ITEMS", width = 25, command = self.viewExpiredItems)
      viewExpiredITEMButton.pack(pady = 10)

      viewITEMButton = Button(frame1, text = "VIEW STOCK LEFT", width = 25, command = self.viewAllItems)
      viewITEMButton.pack(pady = 10)

      sellITEMButton = Button(frame1, text = "SELL AN ITEM", width = 25, command = self.sellItems)
      sellITEMButton.pack(pady = 10)


      salesStatisticsButton = Button(frame1, text = "SALES STATISTICS", width = 25, command = self.salesStats)
      salesStatisticsButton.pack(pady = 10)

      
      exitButton = Button(frame, text = "EXIT THE SYSTEM", width = 25, command = self.saveAndExit)
      exitButton.pack(pady = 10)

   def isItemAvailable(self, itemName):
      '''
      Function to check if the item name
      given exists in store available stock 
      '''
      for item in self.store.getItems("notexpired"):
         if item.name == itemName:
            return item
      return None

   def salesStats(self):
      '''
      Function to print the sales of the store
      '''
      sales = self.store.sales
      if len(sales) == 0:
         messagebox.showerror("Error!", "The store does not have sales today")
      else:
         itemsString = ""
         for item in sales:
            itemsString += str(item)
            itemsString += "\n=============================\n"
         messagebox.showinfo("Sales today",itemsString)
         

   def viewAllItems(self):
      '''
      View all items available in stock
      '''
      items = self.store.getItems("notexpired")
      itemsString = ""
      if len(items) == 0:
         itemsString = "No items to show."
      
      for item in items:
         itemsString += str(item)
         itemsString += "\n=============================\n"
      messagebox.showinfo("Items",itemsString)


   def sellItems(self):
      '''
      Function to sell an item. Gets the item name
      after that checks if the item exists, if yes then it asks for the quantity, then checks the quantity
      if quantity is equal or less than available quanitity then it reduces available quantity of item and
      adds that item into the sales of the store
      '''
      name = self.getUserInput("Name", "Enter product name: ")
      item = self.isItemAvailable(name)
      if item != None:
         while True:
            try:
               quantity = self.getUserInput("Quantity", "Enter product quantity: ")
               quantity = int(quantity)
               break
            except ValueError:
               messagebox.showerror("Quantity Error!", "Enter the valid item quantity")
         if quantity <= item.quantity:
            item.quantity -= quantity
            self.store.sales.append(item)
            messagebox.showinfo("Success", "The operation done successfully")
         else:
            messagebox.showerror("Error!", name + " for this quantity is not available. Try reducing quantity.")
      else:
         messagebox.showerror("Item Error!", "Item not available.")
      
      
   def addItem(self):
      '''
      This function is supposed to add an item to the store.
      Strict validation is done for the name, price, quantity and specially expiry date
      '''
      window = Toplevel(self.master)
      ItemWindow(window, self.store)
      self.master.withdraw()
      
   def getUserInput(self, title, msg):
      '''
      Function to simple get the user input for the required purpose
      '''
      while True:
         name = simpledialog.askstring(title, msg)
         if name == "":
            messagebox.showerror("Error!", "Enter a valid " + title + ".")
         elif name == None:
            return 
         else:
            return name

   def saveAndExit(self):
      itemString = ""
      for item in self.store.items:
         itemString += item.name + "," + item.expiryDate.strftime("%d-%m-%Y")+ "," + str(item.price) +"," + str(item.quantity) + "\n"
      file = open("items.txt", "w")
      file.write(itemString)
      file.close()
      exit(1)
   def editItem(self):
      '''
      Function to edit an item. If the item is avaibable,
      it let's users modify it
      '''
      name = self.getUserInput("Name", "Enter product name to edit: ")
      for item in self.store.getItems("notexpired"):
         if item.name == name:
            self.store.items.remove(item)
            window = Toplevel(self.master)
            ItemWindow(window, self.store)
            self.master.withdraw()
            return
      if name != None:
         messagebox.showerror("Error!", "Item not found")

   def removeItem(self):
      '''
      Remove the item on the basis of user input
      '''
      name = self.getUserInput("Name", "Enter product name to remove: ")
      for item in self.store.getItems("notexpired"):
         if item.name == name:
            self.store.items.remove(item)
            messagebox.showinfo("Removed", "Item " +name+ " removed.")
            return
      if name != None:
         messagebox.showerror("Error!", "Item not found")

         
   def viewExpiredItems(self):
      '''
      Function to show all the expired items of the store
      '''
      items = self.store.getItems("expired")
      itemsString = ""
      if len(items) == 0:
         itemsString = "No items to show."

      for item in items:
         itemsString += str(item)
         itemsString += "\n=============================\n"
      messagebox.showinfo("Items",itemsString)


if __name__ == "__main__":
   root = Tk()
   Main(root)
   root.mainloop()
