from datetime import datetime
'''
Store class to represent a complete store
Store can have the sales and items record
'''
class Store:
   def __init__(self, items):
      self.sales = []
      self.items = items

   def getItems(self, condition):
      itemsToReturn = [] #Return items on the basis of condition, (expired or not-expired)
      today = datetime.today()
      for item in self.items:
         if condition == "notexpired":
            if today < item.expiryDate:
               #Not expired
               itemsToReturn.append(item)
         else:
            if today > item.expiryDate:
               #expired
               itemsToReturn.append(item)
      return itemsToReturn

   def addItem(self, item):
      self.items.append(item)
