# Reproducer for ACL GET/POST Missmatch
  
GET /api/test - works  
POST /api/test  - redirects to login  

Test with restricted methods annotation  
GET /api/test2 - works  
POST /api/test2  - redirects to login   
