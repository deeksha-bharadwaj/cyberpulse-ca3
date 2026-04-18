# CyberPulse Entity Relationship Diagram

## Entities and Attributes

### User
- user_id (PK)
- username
- email
- password (hashed)
- role (Visitor/Subscriber/Premium Subscriber/Specialist/Admin)
- created_at
- status (active/suspended)

### Article
- article_id (PK)
- title
- content
- author_id (FK -> User)
- category
- tags
- access_level (free/premium)
- status (draft/pending/published)
- created_at
- updated_at

### Comment
- comment_id (PK)
- article_id (FK -> Article)
- user_id (FK -> User)
- content
- status (approved/pending/spam)
- created_at

### Subscription
- subscription_id (PK)
- user_id (FK -> User)
- plan (free/premium)
- amount
- start_date
- end_date
- status (active/cancelled/expired)

### Payment
- payment_id (PK)
- subscription_id (FK -> Subscription)
- amount
- method (cash/card)
- status (pending/completed/failed/refunded)
- created_at

### Category
- category_id (PK)
- name
- description

### Badge
- badge_id (PK)
- user_id (FK -> User)
- type (verified_specialist)
- issued_by (FK -> User)
- issued_at

## Relationships
- User ONE to MANY Articles (specialist publishes many articles)
- User ONE to MANY Comments (user writes many comments)
- Article ONE to MANY Comments (article has many comments)
- User ONE to ONE Subscription (user has one subscription)
- Subscription ONE to MANY Payments (subscription has many payments)
- Article MANY to MANY Category (article belongs to many categories)
- User ONE to ONE Badge (specialist has one verified badge)
