<?php
    namespace App\Models;

    use App\Core\DatabaseConnection;
    use App\Core\Model;
    use App\Core\Field;

    class UserModel extends Model {
        protected function getFields(): array {
            return [
                'user_id'          => Field::editableInteger(11),
                'forename'         => Field::editableString(64),
                'surname'          => Field::editableString(64),
                'username'         => Field::editableString(64),
                'password_hash'    => Field::editableString(128),
                'is_active'        => Field::editableBit(),
                'email'            => Field::editableString(255),
                'created_at'       => Field::readonlyDateTime()
            ];
        }

        public function getByUsername(string $username) {
            return $this->getByFieldName('username', $username);
            
        }

        

    }
