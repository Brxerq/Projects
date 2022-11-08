'''
Item class to represent items
the item can have name, expiry date, price and quantity
'''
class Item:
   def __init__(self, name, expiryDate, price, quantity):
      self.name = name
      self.price = price
      self.expiryDate = expiryDate
      self.quantity = quantity

   def __str__(self):
      returningString = ""
      returningString += "Name: " + self.name
      returningString += "\nPrice: " + str(self.price)
      returningString += "\nExpiry Date: " + str(self.expiryDate)
      returningString += "\nQuantity: " + str(self.quantity)
      return returningString
