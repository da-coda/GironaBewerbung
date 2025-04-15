# Beispiel Problem 1

Wir haben folgende Entitäten:
- User
  - id
  - role_id
- Role
  - id
  - module_permissions

Der `\Service\UserService` stellt die Methode `loadUsersForAufrufanlage` bereit, welche alle User mit Berechtigung für das 'Aufrufanlage'-Modul zurückgibt.